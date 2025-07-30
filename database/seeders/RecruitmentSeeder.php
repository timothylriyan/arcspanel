<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recruitment;

class RecruitmentSeeder extends Seeder
{
    public function run(): void
    {
        Recruitment::create([
            'position' => 'Backend Developer (Laravel)',
            'type' => 'Full-time | Remote/Bogor',
            'description' => 'Mencari developer Laravel berpengalaman untuk membangun dan memelihara aplikasi web kami.'
        ]);
        Recruitment::create([
            'position' => 'Frontend Developer (Vue/React)',
            'type' => 'Full-time | Bogor',
            'description' => 'Bertanggung jawab untuk membangun user interface yang interaktif dan responsif.'
        ]);
    }
}