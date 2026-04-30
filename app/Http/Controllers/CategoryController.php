<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    /**
     * Simpan kategori baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:categories,name'
        ]);

        Category::create([
            'name' => $request->name,
            // Hapus bagian slug karena kolom tidak ada
        ]);

        return redirect()->route('admin')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Update kategori
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100|unique:categories,name,' . $category->id
        ]);

        $category->update([
            'name' => $request->name,
            // Hapus bagian slug karena kolom tidak ada
        ]);

        return redirect()->route('admin')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Hapus kategori
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        
        // Cek jika ada posts yang menggunakan kategori ini
        if ($category->posts()->count() > 0) {
            return redirect()->route('admin')->with('error', 'Tidak dapat menghapus kategori yang masih memiliki artikel.');
        }

        $category->delete();

        return redirect()->route('admin')->with('success', 'Kategori berhasil dihapus.');
    }
}