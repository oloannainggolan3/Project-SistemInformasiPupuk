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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable()->after('nama_lengkap');
            $table->string('kabupaten')->nullable()->after('alamat');
            $table->string('kode_pos', 10)->nullable()->after('kabupaten');
            $table->string('foto')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'kabupaten', 'kode_pos', 'foto']);
        });
    }
};
