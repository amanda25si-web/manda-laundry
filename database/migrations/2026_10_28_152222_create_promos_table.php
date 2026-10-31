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
    Schema::create('promo', function (Blueprint $table) {
        $table->increments('promo_id');

        $table->unsignedInteger('paket_id');
        $table->foreign('paket_id')
              ->references('paket_id')
              ->on('paket_laundry')
              ->cascadeOnDelete();

        $table->string('nama_promo', 100);
        $table->text('deskripsi')->nullable();
        $table->unsignedTinyInteger('diskon_persen');
        $table->date('tanggal_mulai');
        $table->date('tanggal_berakhir');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
