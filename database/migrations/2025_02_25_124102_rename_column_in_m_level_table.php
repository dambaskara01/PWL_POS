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
        Schema::table('m_level', function (Blueprint $table) {
            $table->renameColumn('level_Node', 'level_kode'); // Ganti 'kolom_lama' dan 'kolom_baru' sesuai kebutuhan
        });
    }

    
};
