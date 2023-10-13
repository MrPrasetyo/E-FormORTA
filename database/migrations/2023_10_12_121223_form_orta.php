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
        Schema::create('form_orta', function (Blueprint $table) {
            $table->id();
            $table->string('nama_orta');
            $table->date('tgllahir_orta');
            $table->string('alamat_orta');
            $table->integer('domisili_orta')->reference('id')->on('tb_domisili');
            $table->integer('telepon_orta')->reference('id')->on('tb_telepon_orta');
            $table->integer('nomor_hp_orta')->reference('id')->on('tb_nomor_orta');
            $table->string('email_orta');
            $table->integer('alias')->reference('id')->on('tb_alias');
            $table->integer('jumlah_donasi_orta')->reference('id')->on('tb_jumlah_donasi');
            $table->integer('cara_pembayaran_orta')->reference('id')->on('tb_pembayaran');
            $table->integer('teknis_donasi_orta')->reference('id')->on('tb_teknisdonasi');
            $table->string('foto_orta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_orta');
    }
};
