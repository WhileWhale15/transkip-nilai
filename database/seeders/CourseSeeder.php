<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Data untuk semester 2
        $courses = [
            ['nama_mata_kuliah' => 'Praktek Kerja Lapangan', 'sks' => 2, 'semester' => 5],
            ['nama_mata_kuliah' => 'Praktikum E-Application', 'sks' => 2, 'semester' => 5],
            ['nama_mata_kuliah' => 'Praktikum Sistem Informasi Geografis', 'sks' => 2, 'semester' => 5],
            ['nama_mata_kuliah' => 'Praktikum Manajemen Proyek IT', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'Praktikum Teknik Penulisan Karya Ilmiah', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'Praktikum Pemrograman Visual', 'sks' => 2, 'semester' => 5],
            ['nama_mata_kuliah' => 'Praktikum Manajemen Sistem Basis Data', 'sks' => 2, 'semester' => 5],
            ['nama_mata_kuliah' => 'Praktikum Sistem Pendukung Keputusan', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'E-Application', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'Sistem Informasi Geografis', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'Manajemen Proyek IT', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'Teknik Penulisan Karya Ilmiah', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'Rekayasa Perangkat Lunak', 'sks' => 2, 'semester' => 5],
            ['nama_mata_kuliah' => 'Pemrograman Visual', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'Manajemen Sistem Basis Data', 'sks' => 1, 'semester' => 5],
            ['nama_mata_kuliah' => 'Sistem Pendukung Keputusan', 'sks' => 1, 'semester' => 5],
        ];

        foreach ($courses as $course) {
            Course::create([
                'nama_mata_kuliah' => $course['nama_mata_kuliah'],
                'sks' => $course['sks'],
                'semester' => $course['semester'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
