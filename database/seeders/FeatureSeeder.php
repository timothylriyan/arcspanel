<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        Feature::create([
            'title' => 'Our Perspective',
            'description' => 'We view all our work from a risk-based perspective, resulting in practical and actionable recommendations.',
            'icon' => 'bi bi-person-check-fill',
        ]);

        Feature::create([
            'title' => '24/7 Support',
            'description' => 'Dukungan penuh selama 24 jam untuk memastikan kelancaran operasional Anda.',
            'icon' => 'bi bi-headset',
        ]);
    }
}