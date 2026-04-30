<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Menampilkan halaman tentang kami
     */
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
}