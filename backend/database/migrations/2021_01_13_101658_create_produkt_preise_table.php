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
            $table->foreignId('produkt_id')->constrained('produkt')->onDelete('cascade');
            $table->foreignId('preise_id')->constrained('preise')->onDelete('cascade');
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
