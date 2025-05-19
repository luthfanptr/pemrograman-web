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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenants_id');
            $table->date('tgl_pembayaran');
            $table->decimal('jumlah', 10, 2);
            $table->enum('status_pembayaran', ['Lunas', 'Belum'])->default('Belum');

            $table->foreign('tenants_id')
                ->references('id')
                ->on('tenants')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
