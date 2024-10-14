<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->integer('nilai_tugas');
            $table->integer('nilai_kuis');
            $table->integer('nilai_uts');
            $table->integer('nilai_uas');
            $table->integer('sks');
            $table->string('predikat');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->integer('semester'); // Pastikan kolom ini ada
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
