<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //     Schema::create('students', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->string('studentIndex')->unique();
    //         $table->string('first_name');
    //         $table->string('other_name');
    //         $table->string('last_name');
    //         $table->string('password');
    //         $table->string('role');
    //         $table->string('class');
    //         $table->string('guidance');
    //         $table->string('guidance_number');
    //         $table->string('location');
    //         $table->timestamps();
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('students');
    }
}
