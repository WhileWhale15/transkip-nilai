<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;

// Route untuk dashboard
Route::get('/', [ClassroomController::class, 'index'])->name('dashboard');

// Route untuk menampilkan daftar kelas
Route::get('/classes', [ClassroomController::class, 'showClasses'])->name('classes');

// Route untuk menambahkan data kelas
Route::post('/classes', [ClassroomController::class, 'store'])->name('classes.store');

// Route untuk memperbarui data kelas
Route::put('/classes/{id}', [ClassroomController::class, 'update'])->name('classes.update');

// Route untuk menampilkan daftar mahasiswa berdasarkan kelas
Route::get('/classes/{id}/students', [StudentController::class, 'showStudents'])->name('students');

// Route untuk menambahkan data mahasiswa
Route::post('/students', [StudentController::class, 'studentStore'])->name('students.store');

// Route untuk menampilkan nilai mahasiswa berdasarkan mahasiswa yang dipilih
Route::get('/students/{id}/grades', [GradeController::class, 'showGrades'])->name('grades.show');

// Route untuk menambahkan data mata kuliah
Route::post('/courses', [GradeController::class, 'coursesStore'])->name('courses.store');

// Route untuk memperbarui data mahasiswa
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
