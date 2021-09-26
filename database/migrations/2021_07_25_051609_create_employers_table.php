<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_description');
            $table->string('working_hours');
            $table->string('working_days');
            $table->string('break_time');
            $table->string('overtime_average_monthly');
            $table->string('company_name');
            $table->string('industry');
            $table->string('business_content');
            $table->string('company_address');
            $table->string('total_workers');
            $table->string('contact');
            $table->string('fax')->nullabel();
            $table->string('salary')->nullable();
            $table->string('bonous')->nullable();
            $table->string('salary_increase')->nullable();
            $table->date('salary_day')->nullable();
            $table->string('company_room')->nullable();
            $table->string('travel_expenses')->nullable();
            $table->string('health_insurance')->nullable();
            $table->string('pension')->nullable();
            $table->string('work_insurance')->nullable();
            $table->string('income_tax')->nullable();
            $table->string('city_tax')->nullable();
            $table->string('room_rent')->nullable();
            $table->string('internet')->nullable();
            $table->string('uniform')->nullable();
            $table->string('transportation')->nullable();
            $table->string('others')->nullable();
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
        Schema::dropIfExists('employers');
    }
}
