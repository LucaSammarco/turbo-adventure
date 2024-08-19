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
        Schema::create('personaggi', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('razza_id');
            $table->string('arma_principale');
            $table->string('paese');
            $table->timestamps();


            $table->foreign('razza_id')->references('id')->on('razze')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personaggi');
    }
};