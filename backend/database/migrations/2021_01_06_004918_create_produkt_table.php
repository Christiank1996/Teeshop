<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkt', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('beschreibung');
            $table->enum('TeeKategorie', ['gruentee', 'oolongtee', 'schwarztee', 'weisstee', 'zubehoer'])->default('gruentee');
            $table->enum('Artikelart', ['Tee', 'zubehoer'])->default('Tee');
            $table->enum('gewicht', ['50', '100', '200', '500'])->default('100')->nullable();
            $table->string('herkunft')->default('China')->nullable();
            $table->double('preis')->default(2.40);
            $table->string('imagename');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produkt');
    }
}
