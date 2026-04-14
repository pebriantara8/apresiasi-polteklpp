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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('bentuk_luaran');
            $table->string('judul');
            $table->string('jenis_buku')->nullable();
            $table->string('isbn_buku')->nullable();
            $table->string('jenis_publikasi')->nullable();
            $table->string('level_publikasi')->nullable();
            $table->string('link_publikasi')->nullable();
            $table->string('jenis_hak_cipta')->nullable();
            $table->string('biaya_apc')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
