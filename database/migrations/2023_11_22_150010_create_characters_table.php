<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Character;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();

            $table->string('name', 30);
            $table->decimal('height', 4, 2);
            $table->smallInteger('weight')->unsigned();
            $table->string('background',50);
            $table->string('image')->nullable();
            $table->string('image_name')->nullable();
            $table->tinyInteger('armor_class');
            $table->tinyInteger('FOR');
            $table->tinyInteger('DES');
            $table->tinyInteger('COS');
            $table->tinyInteger('INT');
            $table->tinyInteger('SAG');
            $table->tinyInteger('CAR');
            $table->string('slug', 100)->unique();

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
        Schema::dropIfExists('characters');
    }
};
