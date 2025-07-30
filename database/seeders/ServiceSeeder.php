<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'name' => 'Internal Audit & Risk Management',
            'description' => 'Assisting clients in developing their risk profile.'
        ]);

        Service::create([
            'name' => 'Financial Advisory',
            'description' => 'Providing expert advice on financial planning.'
        ]);
    }
}