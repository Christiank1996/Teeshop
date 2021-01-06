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
            $table->enum('art', ['gruentee', 'oolongtee', 'schwarzertee', 'weissertee']);
            $table->string('beschreibung');
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
