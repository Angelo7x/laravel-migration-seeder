<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string("titolo", 100);
            $table->string("descizione", 500);
            $table->string("durata", 30);
            $table->string("località", 40);
            $table->year("data_di_partenza");
            $table->year("data_di_ritorno");
            $table->string("servizi", 200);
            $table->string("categoria", 50);
            $table->string("condizioni_meteo", 100);
            $table->tinyInteger("temperatura");
            $table->float('prezzo', 6, 2);
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
        Schema::dropIfExists('packs');
    }
}
