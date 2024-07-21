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

        Schema::table('files', function (Blueprint $table) {
            $table->string('file_name');
            $table->string('file_extension');
            $table->text('browser_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('files', function (Blueprint $table) {
            $table->dropColumn('file_name');
            $table->dropColumn('file_extension');
            $table->dropColumn('browser_id');
        });
    }
};
