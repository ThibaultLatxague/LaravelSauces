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
        Schema::create('sauces', function (Blueprint $table) {
            $table->string('userId')->unqiue();
            $table->timestamps();
            $table->string('name');
            $table->string('manufacturer');
            $table->string('description');
            $table->string('mainPepper');
            $table->string('imageUrl');
            $table->integer('heat');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->json('usersLiked');
            $table->json('usersDisliked');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sauces');
    }
};
