<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('class_teacher', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('teacher')->constrained("teachers",'teacherIndex');
        //     $table->foreignId('classCode')->constrained("classes","classCode");
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('class_teacher');
    }
}
