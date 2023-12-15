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
        Schema::table('characters', function (Blueprint $table) {
            $table-> unsignedBigInteger('race_id')->nullable()->after('id');

            $table->foreign('race_id')
                ->references('id')
                ->on('races')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            //si puo scrivere anche cosi: $table->dropForeign('race_id');

            $table->dropForeign('characters_race_id_foreign');
            $table->dropColumn('race_id');
        });
    }
};
