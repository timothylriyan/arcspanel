<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\News; // Nanti kita aktifkan ini

class NewsController extends Controller
{
    /**
     * Menampilkan halaman daftar berita.
     */
    public function index()
    {
        // Nanti kita akan ambil data dari database:
        // $newsItems = News::latest()->paginate(9);
        // return view('news.index', ['newsItems' => $newsItems]);

        return view('news.index'); // Untuk sekarang, tampilkan view statis dulu
    }

    /**
     * Menampilkan satu artikel berita.
     */
    public function show($slug) // Parameter $slug akan kita gunakan nanti
    {
        // Nanti kita akan ambil data dari database:
        // $news = News::where('slug', $slug)->firstOrFail();
        // return view('news.show', ['news' => $news]);

        return view('news.show'); // Untuk sekarang, tampilkan view statis dulu
    }
}
