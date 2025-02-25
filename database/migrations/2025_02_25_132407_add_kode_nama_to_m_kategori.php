<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('m_kategori', function (Blueprint $table) {
            $table->string('kategori_kode', 10)->unique()->after('id'); 
            $table->string('kategori_nama', 100)->after('kategori_kode');
        });
    }

    /**
     * Reverse the migrations.
     */
};
