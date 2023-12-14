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
        Schema::create('cabang_juc', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->string('pic');
            $table->string('no_telp');
            $table->string('alamat');
            $table->decimal('latitude', 10,7);
            $table->decimal('longitude', 10,7);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabang_juc');
    }
};
