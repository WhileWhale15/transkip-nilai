<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Tampilkan daftar mahasiswa di kelas yang dipilih
    public function showStudents($classroomId)
    {
        $classroom = Classroom::findOrFail($classroomId);
        $students = Student::where('classroom_id', $classroomId)->get();

        return view('pages.students', compact('students', 'classroom'));
    }

    public function studentStore(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'status' => 'required|string',
            'classroom_id' => 'required|integer|exists:classrooms,id',
        ]);

        // Buat data mahasiswa baru
        Student::create($validatedData);

        return redirect()->back()->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'nim' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Find the student by ID and update its information
        $student = Student::findOrFail($id);
        $student->nim = $request->input('nim');
        $student->nama = $request->input('nama');
        $student->status = $request->input('status');
        $student->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Student updated successfully.');
    }

}
