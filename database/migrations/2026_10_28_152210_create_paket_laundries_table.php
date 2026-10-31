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
    Schema::create('paket_laundry', function (Blueprint $table) {
        $table->increments('paket_id');

        $table->unsignedInteger('layanan_id');
        $table->foreign('layanan_id')
              ->references('layanan_id')
              ->on('layanan')
              ->cascadeOnDelete();

        $table->string('nama_paket', 100);
        $table->text('deskripsi')->nullable();
        $table->decimal('berat_kg', 5, 2);
        $table->decimal('harga_paket', 12, 2);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_laundries');
    }
};
