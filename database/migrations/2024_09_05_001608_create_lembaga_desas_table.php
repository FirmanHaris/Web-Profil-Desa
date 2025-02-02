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
        Schema::create('lembaga_desas', function (Blueprint $table) {
            $table->id('id_lembaga');
            $table->string('nama_lembaga');
            $table->string('singkatan');
            $table->string('alamat_kantor');
            $table->string('ketua');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembaga_desas');
    }
};
