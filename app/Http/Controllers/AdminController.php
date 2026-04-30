<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Menampilkan dashboard admin
     */
    public function index()
    {
        $users = User::withCount('posts')->latest()->get();
        $categories = Category::withCount('posts')->latest()->get();
        
        $stats = [
            'total_users' => User::count(),
            'total_bloggers' => User::where('role', 'blogger')->count(),
            'total_posts' => Post::count(),
            'total_categories' => Category::count()
        ];

        return view('admin', compact('users', 'categories', 'stats'));
    }

    /**
     * Menghapus user
     */
    public function deleteUser($id)
    {
        // Cegah admin menghapus dirinya sendiri
        if ($id == auth()->id()) {
            return redirect()->route('admin')->with('error', 'Tidak dapat menghapus akun sendiri.');
        }

        $user = User::findOrFail($id);
        
        // Hapus posts yang dimiliki user
        $user->posts()->delete();
        
        // Hapus profile jika ada
        if ($user->profile) {
            $user->profile()->delete();
        }
        
        $user->delete();

        return redirect()->route('admin')->with('success', 'User berhasil dihapus.');
    }

    /**
     * Update role user
     */
    public function updateUserRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:user,blogger,admin'
        ]);

        $user = User::findOrFail($id);
        $user->update(['role' => $request->role]);

        return response()->json(['success' => true]);
    }
}