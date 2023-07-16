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
        Schema::create('tb_kurban', function (Blueprint $table) {
            $table->increments('id_kurban');
            $table->integer('kurban_id_pengkurban')->unsigned();
            $table->string('jenis_kurban', 10);
            $table->string('pilihan_kurban', 50);
            $table->timestamps();
        });
        Schema::table('tb_kurban', function (Blueprint $table) {
            $table->foreign('kurban_id_pengkurban')->references('id_pengkurban')->on('tb_pengkurban')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kurban');
    }
};
