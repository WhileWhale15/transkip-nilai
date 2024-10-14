<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        Classroom::create([
            'jenjang' => 'D3',
            'program_studi' => 'Teknik Informatika',
            'fakultas' => 'Vokasi',
            'tahun_masuk' => 2022,
            'kelas' => 'A'
        ]);
    }
}

