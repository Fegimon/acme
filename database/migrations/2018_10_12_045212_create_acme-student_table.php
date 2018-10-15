<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcmeStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acme-student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('dob');
           $table->string('email');
            $table->string('gender');
            $table->integer('age');
            $table->string('bloodgroup');
            $table->string('religion');
            $table->string('student_image');
            $table->string('admission_no');
            $table->string('admission_date');
            $table->string('doj');
            // $table->string('school_name');
            // $table->string('school_city');
            // $table->string('school_state');
            // $table->string('school_zip');
            // $table->integer('school_mobile');
            // $table->string('school_fax');
            $table->string('school_email');

            $table->string('father_name');
            $table->string('mother_name');
            $table->string('occupation');
            $table->integer('father_mobile');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('status');
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
        Schema::dropIfExists('acme-student');
    }
}
