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
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table ->string('nama');
            $table->text('ket');
            $table ->string('lokasi');
            $table ->string('tipe');
            $table ->string('maps');
            $table ->longText('detail');
            $table->float('total_rating');
            $table->integer('total_ulasan');
            $table ->string('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisatas');
    }
};
