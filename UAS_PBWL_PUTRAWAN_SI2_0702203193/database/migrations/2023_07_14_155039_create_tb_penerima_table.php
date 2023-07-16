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
        Schema::create('tb_penerima', function (Blueprint $table) {
            $table->increments('id_penerima');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->string('jenis_kurban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_penerima');
    }
};
