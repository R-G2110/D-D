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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 30)->unique();
            $table->string('name', 30);
            $table->text('description');
            $table->tinyInteger('Mod_FOR');
            $table->tinyInteger('Mod_DES');
            $table->tinyInteger('Mod_COS');
            $table->tinyInteger('Mod_INT');
            $table->tinyInteger('Mod_SAG');
            $table->tinyInteger('Mod_CAR');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
