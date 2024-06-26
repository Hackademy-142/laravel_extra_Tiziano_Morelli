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
        Schema::create('chirp_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chirp_id')->nullable(); // creazione della colonna chirp_id
            $table->foreign('chirp_id')->references('id')->on('chirps');
            $table->unsignedBigInteger('tag_id')->nullable(); //  tag_id
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chirp_tag');
    }
};
