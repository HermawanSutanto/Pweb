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
        Schema::create('data_peminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('peminjam');
            $table->string('organisasi');
            $table->string('namaBarang');
            $table->integer('jumlah');
            $table->string('waktu_pinjam');
            $table->string('pengembalian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_peminjamen');
    }
};
