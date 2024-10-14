<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data nilai
        // Semester 1 (course_id 1-12)
        Grade::create([
            'id' => 1860,
            'course_id' => 1,
            'nilai_tugas' => 78,
            'nilai_kuis' => 80,
            'nilai_uts' => 75,
            'nilai_uas' => 77,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1861,
            'course_id' => 2,
            'nilai_tugas' => 82,
            'nilai_kuis' => 84,
            'nilai_uts' => 80,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1862,
            'course_id' => 3,
            'nilai_tugas' => 76,
            'nilai_kuis' => 78,
            'nilai_uts' => 73,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1863,
            'course_id' => 4,
            'nilai_tugas' => 89,
            'nilai_kuis' => 91,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'sks' => 4,
            'predikat' => 'A',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1864,
            'course_id' => 5,
            'nilai_tugas' => 72,
            'nilai_kuis' => 74,
            'nilai_uts' => 70,
            'nilai_uas' => 73,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1865,
            'course_id' => 6,
            'nilai_tugas' => 81,
            'nilai_kuis' => 83,
            'nilai_uts' => 78,
            'nilai_uas' => 80,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1866,
            'course_id' => 7,
            'nilai_tugas' => 87,
            'nilai_kuis' => 89,
            'nilai_uts' => 84,
            'nilai_uas' => 86,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1867,
            'course_id' => 8,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1868,
            'course_id' => 9,
            'nilai_tugas' => 84,
            'nilai_kuis' => 86,
            'nilai_uts' => 81,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1869,
            'course_id' => 10,
            'nilai_tugas' => 88,
            'nilai_kuis' => 90,
            'nilai_uts' => 85,
            'nilai_uas' => 87,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1870,
            'course_id' => 11,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 1,
        ]);

        Grade::create([
            'id' => 1871,
            'course_id' => 12,
            'nilai_tugas' => 85,
            'nilai_kuis' => 87,
            'nilai_uts' => 80,
            'nilai_uas' => 84,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 1,
        ]);

        // Semester 2 (course_id 15-26)
        Grade::create([
            'id' => 1872,
            'course_id' => 15,
            'nilai_tugas' => 74,
            'nilai_kuis' => 76,
            'nilai_uts' => 70,
            'nilai_uas' => 72,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1873,
            'course_id' => 16,
            'nilai_tugas' => 80,
            'nilai_kuis' => 82,
            'nilai_uts' => 77,
            'nilai_uas' => 81,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1874,
            'course_id' => 17,
            'nilai_tugas' => 85,
            'nilai_kuis' => 87,
            'nilai_uts' => 82,
            'nilai_uas' => 86,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1875,
            'course_id' => 18,
            'nilai_tugas' => 78,
            'nilai_kuis' => 80,
            'nilai_uts' => 75,
            'nilai_uas' => 77,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1876,
            'course_id' => 19,
            'nilai_tugas' => 72,
            'nilai_kuis' => 74,
            'nilai_uts' => 70,
            'nilai_uas' => 73,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1877,
            'course_id' => 20,
            'nilai_tugas' => 88,
            'nilai_kuis' => 90,
            'nilai_uts' => 84,
            'nilai_uas' => 89,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1878,
            'course_id' => 21,
            'nilai_tugas' => 76,
            'nilai_kuis' => 78,
            'nilai_uts' => 73,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1879,
            'course_id' => 22,
            'nilai_tugas' => 82,
            'nilai_kuis' => 84,
            'nilai_uts' => 79,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1880,
            'course_id' => 23,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1881,
            'course_id' => 24,
            'nilai_tugas' => 89,
            'nilai_kuis' => 91,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'sks' => 4,
            'predikat' => 'A',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1882,
            'course_id' => 25,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 2,
        ]);

        Grade::create([
            'id' => 1883,
            'course_id' => 26,
            'nilai_tugas' => 84,
            'nilai_kuis' => 86,
            'nilai_uts' => 81,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 2,
        ]);

        // Semester 3 (course_id 27-39)
        Grade::create([
            'id' => 1884,
            'course_id' => 27,
            'nilai_tugas' => 79,
            'nilai_kuis' => 81,
            'nilai_uts' => 76,
            'nilai_uas' => 80,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1885,
            'course_id' => 28,
            'nilai_tugas' => 88,
            'nilai_kuis' => 90,
            'nilai_uts' => 84,
            'nilai_uas' => 89,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1886,
            'course_id' => 29,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1887,
            'course_id' => 30,
            'nilai_tugas' => 82,
            'nilai_kuis' => 84,
            'nilai_uts' => 79,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1888,
            'course_id' => 31,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1889,
            'course_id' => 32,
            'nilai_tugas' => 89,
            'nilai_kuis' => 91,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'sks' => 4,
            'predikat' => 'A',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1890,
            'course_id' => 33,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1891,
            'course_id' => 34,
            'nilai_tugas' => 84,
            'nilai_kuis' => 86,
            'nilai_uts' => 81,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1892,
            'course_id' => 35,
            'nilai_tugas' => 76,
            'nilai_kuis' => 78,
            'nilai_uts' => 73,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1893,
            'course_id' => 36,
            'nilai_tugas' => 88,
            'nilai_kuis' => 90,
            'nilai_uts' => 84,
            'nilai_uas' => 89,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1894,
            'course_id' => 37,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1895,
            'course_id' => 38,
            'nilai_tugas' => 85,
            'nilai_kuis' => 87,
            'nilai_uts' => 80,
            'nilai_uas' => 84,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 3,
        ]);

        Grade::create([
            'id' => 1896,
            'course_id' => 39,
            'nilai_tugas' => 79,
            'nilai_kuis' => 81,
            'nilai_uts' => 76,
            'nilai_uas' => 80,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 3,
        ]);

        // Semester 4 (course_id 40-55)
        Grade::create([
            'id' => 1897,
            'course_id' => 40,
            'nilai_tugas' => 82,
            'nilai_kuis' => 84,
            'nilai_uts' => 79,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1898,
            'course_id' => 41,
            'nilai_tugas' => 78,
            'nilai_kuis' => 80,
            'nilai_uts' => 75,
            'nilai_uas' => 77,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1899,
            'course_id' => 42,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1900,
            'course_id' => 43,
            'nilai_tugas' => 89,
            'nilai_kuis' => 91,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'sks' => 4,
            'predikat' => 'A',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1901,
            'course_id' => 44,
            'nilai_tugas' => 84,
            'nilai_kuis' => 86,
            'nilai_uts' => 81,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1902,
            'course_id' => 45,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1903,
            'course_id' => 46,
            'nilai_tugas' => 88,
            'nilai_kuis' => 90,
            'nilai_uts' => 84,
            'nilai_uas' => 89,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1904,
            'course_id' => 47,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1905,
            'course_id' => 48,
            'nilai_tugas' => 82,
            'nilai_kuis' => 84,
            'nilai_uts' => 79,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1906,
            'course_id' => 49,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1907,
            'course_id' => 50,
            'nilai_tugas' => 89,
            'nilai_kuis' => 91,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'sks' => 4,
            'predikat' => 'A',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1908,
            'course_id' => 51,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1909,
            'course_id' => 52,
            'nilai_tugas' => 84,
            'nilai_kuis' => 86,
            'nilai_uts' => 81,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1910,
            'course_id' => 53,
            'nilai_tugas' => 76,
            'nilai_kuis' => 78,
            'nilai_uts' => 73,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1911,
            'course_id' => 54,
            'nilai_tugas' => 88,
            'nilai_kuis' => 90,
            'nilai_uts' => 84,
            'nilai_uas' => 89,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 4,
        ]);

        Grade::create([
            'id' => 1912,
            'course_id' => 55,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 4,
        ]);

        // Semester 5 (course_id 56-71)
        Grade::create([
            'id' => 1913,
            'course_id' => 56,
            'nilai_tugas' => 82,
            'nilai_kuis' => 84,
            'nilai_uts' => 79,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1914,
            'course_id' => 57,
            'nilai_tugas' => 78,
            'nilai_kuis' => 80,
            'nilai_uts' => 75,
            'nilai_uas' => 77,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1915,
            'course_id' => 58,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1916,
            'course_id' => 59,
            'nilai_tugas' => 89,
            'nilai_kuis' => 91,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'sks' => 4,
            'predikat' => 'A',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1917,
            'course_id' => 60,
            'nilai_tugas' => 84,
            'nilai_kuis' => 86,
            'nilai_uts' => 81,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1918,
            'course_id' => 61,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1919,
            'course_id' => 62,
            'nilai_tugas' => 88,
            'nilai_kuis' => 90,
            'nilai_uts' => 84,
            'nilai_uas' => 89,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1920,
            'course_id' => 63,
            'nilai_tugas' => 75,
            'nilai_kuis' => 77,
            'nilai_uts' => 72,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1921,
            'course_id' => 64,
            'nilai_tugas' => 82,
            'nilai_kuis' => 84,
            'nilai_uts' => 79,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1922,
            'course_id' => 65,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1923,
            'course_id' => 66,
            'nilai_tugas' => 89,
            'nilai_kuis' => 91,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'sks' => 4,
            'predikat' => 'A',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1924,
            'course_id' => 67,
            'nilai_tugas' => 84,
            'nilai_kuis' => 86,
            'nilai_uts' => 81,
            'nilai_uas' => 83,
            'sks' => 3,
            'predikat' => 'B+',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1925,
            'course_id' => 68,
            'nilai_tugas' => 76,
            'nilai_kuis' => 78,
            'nilai_uts' => 73,
            'nilai_uas' => 74,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1926,
            'course_id' => 69,
            'nilai_tugas' => 88,
            'nilai_kuis' => 90,
            'nilai_uts' => 84,
            'nilai_uas' => 89,
            'sks' => 4,
            'predikat' => 'A-',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1927,
            'course_id' => 70,
            'nilai_tugas' => 77,
            'nilai_kuis' => 79,
            'nilai_uts' => 74,
            'nilai_uas' => 76,
            'sks' => 2,
            'predikat' => 'B',
            'student_id' => 28,
            'semester' => 5,
        ]);

        Grade::create([
            'id' => 1928,
            'course_id' => 71,
            'nilai_tugas' => 89,
            'nilai_kuis' => 91,
            'nilai_uts' => 86,
            'nilai_uas' => 90,
            'sks' => 4,
            'predikat' => 'A',
            'student_id' => 28,
            'semester' => 5,
        ]);

    }
}