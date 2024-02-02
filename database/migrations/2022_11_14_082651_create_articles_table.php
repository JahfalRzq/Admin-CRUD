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
        Schema::create('articles', function (Blueprint $table) {
            // id,title,description,category,media,created_by,time stamp
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->json('category');
            $table->string('media');
            $table->string('reason')->nullable();
            $table->string('created_by');
            $table->enum('status', ['Reject', 'Published', 'Feedback', 'Draft', 'On Review'])->default('Draft');
            $table->integer('view')->default(0);
            $table->string('slug')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
};
