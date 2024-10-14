<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $students = [
            ['nim' => '222406001', 'nama' => 'Hery Maruli Tua Nababan', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406002', 'nama' => 'Faisal Akbar', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406003', 'nama' => 'Yuda Ari Sandi Pasaribu', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406004', 'nama' => 'Abed Nego Manurung', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406005', 'nama' => 'Affifah Aulia Zahra', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406006', 'nama' => 'Aflahah Naqiyyah Nasution', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406007', 'nama' => 'Ahmad Bintang Fadhilah', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406008', 'nama' => 'Alya Sabila Azhar', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406009', 'nama' => 'Andika Wira Jaya Lubis', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406010', 'nama' => 'Arinta Tampubolon', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406012', 'nama' => 'Bagas Berkat Immanuel Harefa', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406015', 'nama' => 'Delon Pondapotan Parlindungan Pardede', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406016', 'nama' => 'Dionisius Ambarita', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406017', 'nama' => 'Eric Sebastian Sijabat', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406018', 'nama' => 'Faiz Hazim Hawari', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406019', 'nama' => 'Fajar Ahmad Kurniadi', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406020', 'nama' => 'Fakhri Djamaris', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406021', 'nama' => 'Fathul Amin', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406022', 'nama' => 'Fathur Rahman', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406025', 'nama' => 'Greenita Manalu', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406026', 'nama' => 'Hasan Andreas Lumbantoruan', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406027', 'nama' => 'Immanuel Siburian', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406028', 'nama' => 'Jonathan Dionisius Hamonangan Sinaga', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406029', 'nama' => 'Joy Silaban', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406030', 'nama' => 'M Abel Adyatma', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406032', 'nama' => 'Marisi Vico Rifaldy Panjaitan', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406033', 'nama' => 'Michael Dundung Parachian Tampubolon', 'status' => 'Aktif', 'classroom_id' => 1],
            ['nim' => '222406038', 'nama' => 'Muhammad Syafrie Hakim', 'status' => 'Aktif', 'classroom_id' => 1],
        ];

        DB::table('students')->insert($students);
    }
}
