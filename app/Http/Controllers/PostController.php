<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail; // PASTIKAN INI ADA
use App\Mail\ContactFormMail; // PASTIKAN INI ADA

class PostController extends Controller
{


    public function tentang()
    {
        $user = Auth::user();
        return view('tentang', compact('user'));
    }

    /**
     * Menampilkan halaman kontak
     */
    public function kontak()
    {
        $user = Auth::user();
        return view('kontak', compact('user'));
    }

    /**
     * Mengirim pesan kontak
     */
    public function kirimPesan(Request $request)
    {
        // Validasi form
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string|min:10'
        ]);

        try {
            // Kirim email ke developer
            Mail::to('glhmahe@gmail.com')->send(new ContactFormMail(
                $request->nama,
                $request->email,
                $request->pesan
            ));

            return redirect()->route('kontak')->with('success', 'Pesan berhasil dikirim! Kami akan membalasnya segera.');

        } catch (\Exception $e) {
            return redirect()->route('kontak')->with('error', 'Maaf, terjadi kesalahan. Silakan coba lagi.');
        }
    }




    // daftar artikel publik (halaman artikel)
    public function index(Request $request)
    {
        $query = Post::with(['user', 'category'])
            ->where('status', 'published')
            ->latest();

        // Filter berdasarkan kategori
        if ($request->has('category') && $request->category != 'all') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Filter berdasarkan popularitas
        if ($request->has('filter')) {
            if ($request->filter == 'popular') {
                $query->orderBy('views', 'desc');
            } elseif ($request->filter == 'latest') {
                $query->latest();
            }
        }

        // Pencarian
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%')
                    ->orWhereHas('category', function ($q) use ($searchTerm) {
                        $q->where('name', 'like', '%' . $searchTerm . '%');
                    });
            });
        }

        $posts = $query->paginate(6);
        $categories = Category::withCount(['posts' => function ($query) {
            $query->where('status', 'published');
        }])->get();

        // Artikel populer untuk sidebar
        $popularPosts = Post::with(['user', 'category'])
            ->where('status', 'published')
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('artikel', compact('posts', 'categories', 'popularPosts'));
    }
    // HANYA SATU METHOD show() - gabungkan kedua fungsi
    public function show($slug)
    {
        $post = Post::with(['user', 'category'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        // Increment views
        $post->increment('views');

        // Related posts
        $related = Post::with(['user', 'category'])
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('blogPage', compact('post', 'related'));
    }

    // daftar post milik user (dashboard blogger)
    public function userPosts()
    {
        // Ambil posts milik user yang login saja
        $posts = Post::where('user_id', auth()->id())
            ->with('category')
            ->latest()
            ->get();

        return view('dashboardblog', compact('posts'));
    }

    // Dashboard untuk user biasa
    public function userDashboard()
    {
        $posts = Post::with(['user', 'category'])
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->paginate(6); // 6 posts per page

        $popularPosts = Post::with(['user', 'category'])
            ->where('status', 'published')
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();

        return view('dashboard', compact('posts', 'popularPosts'));
    }

    // form upload
    public function create()
    {
        $categories = Category::all();
        return view('uploadblog', compact('categories'));
    }

    // simpan post baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:200',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
            'thumbnail' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();

            // PERBAIKAN: Gunakan 'thumbnails' (plural) untuk konsistensi
            $path = $file->storeAs('thumbnails', $filename, 'public');
            $data['thumbnail'] = $path; // Ini akan menjadi 'thumbnails/filename.jpg'
        }

        $slugBase = Str::slug($data['title']);
        $slug = $slugBase;
        $i = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $i++;
        }

        $data['slug'] = $slug;
        $data['user_id'] = auth()->id();
        $data['views'] = 0;

        Post::create($data);
        return redirect()->route('dashboardblog')->with('success', 'Post berhasil dibuat.');
    }

    // edit
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('uploadblog', compact('post', 'categories'));
    }

    // update
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:200',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
            'thumbnail' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        if ($request->hasFile('thumbnail')) {
            // PERBAIKAN: Hapus file lama jika ada
            if ($post->thumbnail && Storage::disk('public')->exists($post->thumbnail)) {
                Storage::disk('public')->delete($post->thumbnail);
            }

            $file = $request->file('thumbnail');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();

            // PERBAIKAN: Gunakan 'thumbnails' (plural) untuk konsistensi
            $path = $file->storeAs('thumbnails', $filename, 'public');
            $data['thumbnail'] = $path;
        }

        $post->update($data);
        return redirect()->route('dashboardblog')->with('success', 'Post berhasil diupdate.');
    }

    // destroy
    public function destroy(Post $post)
    {
        // PERBAIKAN: Hapus file thumbnail jika ada
        if ($post->thumbnail && Storage::disk('public')->exists($post->thumbnail)) {
            Storage::disk('public')->delete($post->thumbnail);
        }
        $post->delete();
        return back()->with('success', 'Post berhasil dihapus.');
    }

    // Method tambahan untuk memperbaiki data yang sudah ada (opsional)
    public function fixThumbnailPaths()
    {
        // Method ini untuk memperbaiki path thumbnail yang lama
        $posts = Post::where('thumbnail', 'LIKE', 'thumbnail/%')->get();

        foreach ($posts as $post) {
            $oldPath = $post->thumbnail;
            $newPath = str_replace('thumbnail/', 'thumbnails/', $oldPath);

            // Pindahkan file fisik jika ada
            if (Storage::disk('public')->exists($oldPath)) {
                Storage::disk('public')->move($oldPath, $newPath);
                $post->thumbnail = $newPath;
                $post->save();
            }
        }

        return "Thumbnail paths fixed successfully!";
    }
}
