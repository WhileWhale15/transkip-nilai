<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    // Tampilkan nilai mahasiswa berdasarkan mahasiswa yang dipilih
    public function showGrades($studentId)
    {
        $student = Student::findOrFail($studentId); // Mengambil data mahasiswa yang dipilih
        $grades = Grade::with('course') // Mengambil nilai mahasiswa dengan relasi ke course
            ->where('student_id', $studentId)
            ->get();

        // Kelompokkan nilai berdasarkan semester
        $gradesBySemester = $grades->groupBy(function ($grade) {
            return $grade->course->semester; // Assuming semester is stored in Course model
        });


        // Hitung jumlah SKS dan IPK untuk mahasiswa
        $total_sks = $grades->sum('sks');
        $total_ipk = $grades->avg(function ($grade) {
            return ($grade->nilai_tugas + $grade->nilai_kuis + $grade->nilai_uts + $grade->nilai_uas) / 4;
        }); // Menghitung IPK berdasarkan rata-rata nilai

        return view('pages.grades', compact('gradesBySemester', 'student', 'total_sks', 'total_ipk'));
    }

}

