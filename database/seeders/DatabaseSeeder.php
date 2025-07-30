<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// 1. Impor semua file Seeder yang ingin Anda jalankan
use Database\Seeders\ServiceSeeder;
use Database\Seeders\ClientSeeder; // (Contoh jika nanti Anda punya seeder lain)

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 2. Panggil semua Seeder di dalam array ini
        $this->call([
            ServiceSeeder::class,
            ClientSeeder::class,
            NewsSeeder::class,
            FeatureSeeder::class,
            RecruitmentSeeder::class,
            // ClientSeeder::class, // (Contoh jika nanti Anda punya seeder lain)
        ]);
    }
}