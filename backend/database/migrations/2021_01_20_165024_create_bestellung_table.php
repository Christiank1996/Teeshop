<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestellungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestellung', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id_bestellung')->constrained('users')->onDelete('cascade');
            $table->foreignId('produkt_id_bestellung')->constrained('produkt')->onDelete('cascade');
            $table->String('menge_bestellung');
            $table->String('gewicht_bestellung');
            $table->String('summe_bestellung');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bestellung');
    }
}
