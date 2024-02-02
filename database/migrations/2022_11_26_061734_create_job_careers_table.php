<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_careers', function (Blueprint $table) {
            $table->id();
            $table->string('job_tittle');
            $table->string('division');
            $table->string('location');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('job_type');
            $table->string('job_system');
            $table->string('role_description');
            $table->string('jobdesk_description');
            $table->string('role_environment');
            $table->string('team_description');
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
        Schema::dropIfExists('job_careers');
    }
};
