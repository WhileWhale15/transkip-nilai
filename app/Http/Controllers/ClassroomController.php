<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    // Tampilkan halaman dashboard
    public function index()
    {
        // Fetch total number of classes
        $totalClasses = Classroom::count(); // Adjust this based on your actual model and method

        // Fetch other data if needed
        $totalStudents = Student::count(); // Example for students

        // Pass the variables to the view
        return view('dashboard', compact('totalClasses', 'totalStudents'));
    }


    // Tampilkan daftar kelas
    public function showClasses()
    {
        $classes = Classroom::paginate(15);
        return view('pages.classes', compact('classes'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenjang' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'tahun_masuk' => 'required|integer',
            'kelas' => 'required|string|max:1',
        ]);

        Classroom::create($validatedData);

        return redirect()->back()->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->update($request->all());

        return redirect()->back()->with('success', 'Kelas berhasil diperbarui.');
    }

}

