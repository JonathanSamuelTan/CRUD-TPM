<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katalog__obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pbf');
            $table->integer('stok');
            $table->integer('harga');
            $table->string('image');
            $table->unsignedBigInteger('kegunaan_id');
            $table->foreign('kegunaan_id')->references('id')->on('kegunaans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('katalog__obats');
    }
};
