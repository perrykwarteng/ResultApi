<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('remarks', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('studentIndex')->unique()->constrained("students", 'studentIndex');
        //     $table->string('attendance');
        //     $table->string('outOf');
        //     $table->string('promoted');
        //     $table->string('conduct');
        //     $table->string('attitude');
        //     $table->string('interest');
        //     $table->string('classTeacherRemarks');
        //     $table->string('headTeacherRemarks');
        //     $table->date('date');
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
        // Schema::dropIfExists('remarks');
    }
}
