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
        Schema::table('html_properties', function (Blueprint $table) {
            $table->string('tag')->default('div');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('html_properties', function (Blueprint $table) {
            $table->dropColumn('tag');
        });
    }
};
