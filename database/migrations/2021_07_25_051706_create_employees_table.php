<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->integer('age');
            $table->string('sex');
            $table->string('nationality');
            $table->string('present_address');
            $table->string('academic_qualification');
            $table->string('japanese_language');
            $table->string('other_language')->nullable();
            $table->string('industry')->nullable();
            $table->string('skill_exam');
            $table->string('work_experience')->nullable();
            $table->integer('ms_office_skill');
            $table->integer('graphics_design_other');
            $table->string('salary_per_year')->nullable();
            $table->string('working_area')->nullable();
            $table->string('apartment')->nullable();
            $table->string('work_time')->nullable();
            $table->string('possible_shift')->nullable();
            $table->date('able_to_join');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('employees');
    }
}
