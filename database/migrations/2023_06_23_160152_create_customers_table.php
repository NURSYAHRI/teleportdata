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
        Schema::create('customers', function (Blueprint $table) {
            $table -> id();
            $table->char('id_customer');
            $table->char('nama');
            $table->char('category');
            $table->char('pic');
            $table->string('telepon');
            $table->char('alamat');
            $table->char('bandwidht');
            $table->char('ip');
            $table->char('status');
            $table->date('tanggal_berlangganan');
            $table->char('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
