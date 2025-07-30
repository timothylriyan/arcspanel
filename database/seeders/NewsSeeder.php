<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Str; // <-- Import Str facade untuk membuat slug

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::create([
            'title' => 'Judul Berita Pertama',
            'slug' => Str::slug('Judul Berita Pertama'),
            'body' => 'Ini adalah isi konten dari berita pertama. Anda bisa menulis teks panjang di sini.',
            'image' => null, // Biarkan kosong untuk saat ini
        ]);

        News::create([
            'title' => 'Berita Penting Kedua',
            'slug' => Str::slug('Berita Penting Kedua'),
            'body' => 'Ini adalah isi dari berita kedua yang tidak kalah pentingnya dari berita pertama.',
            'image' => null,
        ]);
    }
}