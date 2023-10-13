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
        Schema::create('tb_domisili', function (Blueprint $table) {
            $table->id();
            $table->integer('provinsi_id');
            $table->string('provinsi_name');
            $table->integer('kota_id');
            $table->string('kota_name');
            $table->integer('kecamatan_id');
            $table->string('kecamatan_name');
            $table->integer('kelurahan_id');
            $table->string('kelurahan_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_domisili');
    }
};
