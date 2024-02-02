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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id');
            $table->foreignId('role_id');
            $table->foreignId('division_id');
            $table->foreignId('position_id');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('type')->nullable();
            $table->string('nip')->nullable();
            $table->string('nip2')->nullable();
            $table->enum('gender',['Male','Female'])->nullable();
            $table->date('birthday')->nullable();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
