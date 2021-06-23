<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('vga');
            $table->string('cpu');
            $table->string('hdd');
            $table->string('ram');
            $table->integer('harga');
            $table->text('gambar');
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
        Schema::dropIfExists('acers');
    }
}
