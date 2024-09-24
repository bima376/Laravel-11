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
        Schema::table('juniors', function (Blueprint $table) {
            $table->string('gender', 1)->nullable()->after('nama')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('juniors', function (Blueprint $table) {
            $table->string('gender', 10)->nullable(false)->after('nama')->change();
        });
    }
};
