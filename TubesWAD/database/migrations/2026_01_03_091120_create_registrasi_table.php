<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('registrasi_event', function (Blueprint $table) {
            $table->id(); // id_registrasi
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('event_id')->constrained()->onDelete('cascade');

            $table->string('nama_peserta');
            $table->string('email');
            $table->string('nomor_hp');
            $table->string('status_registrasi')->default('terdaftar');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrasi_event');
    }
};