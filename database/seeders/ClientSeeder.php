<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        Client::create([
            'name' => 'Contoh Klien 1',
            'logo' => 'logos/placeholder.png' // Path contoh
        ]);
        Client::create([
            'name' => 'Contoh Klien 2',
            'logo' => 'logos/placeholder.png'
        ]);
    }
}