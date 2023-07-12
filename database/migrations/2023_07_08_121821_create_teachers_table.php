<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('teacherIndex')->unique()->index("teacher_index");
            $table->string('first_name');
            $table->string('other_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('email')->unique();
            $table->boolean('asSubjectTeacher');
            $table->boolean('asClassTeacher');
            $table->string('number');
            $table->string('location');
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
        Schema::dropIfExists('teachers');
    }
}
