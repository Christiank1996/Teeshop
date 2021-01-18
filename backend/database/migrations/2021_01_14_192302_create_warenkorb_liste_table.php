<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarenkorbListeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warenkorb_liste', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produkt_id')->nullable()->constrained('produkt')->onDelete('set null');
            $table->integer('menge');
            $table->String('gewicht');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warenkorb_liste');
    }
}
