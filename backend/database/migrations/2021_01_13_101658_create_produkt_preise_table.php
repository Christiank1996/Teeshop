<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduktPreiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkt_preise', function (Blueprint $table) {
            $table->id();
            $table->foreignid('produkt_id')->references('id')->on('produkt');
            $table->foreignid('preise_id')->references('id')->on('preise');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produkt_preise');
    }
}
