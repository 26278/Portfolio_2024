<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_programming_languages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->unsigned();
            $table->unsignedBigInteger('programming_language_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')
                  ->onDelete('cascade');
            $table->foreign('programming_language_id')->references('id')->on('programming_languages')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_programming_languages');
    }
};
