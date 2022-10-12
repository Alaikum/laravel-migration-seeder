<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->text('stazioni_intermedie')->nullable();
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->smallInteger('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->tinyInteger('in_orario')->unsigned()->default(1);
            $table->smallInteger('minuti_di_ritardo')->nullable();
            $table->dateTime('nuovo_orario_di_partenza')->nullable();
            $table->dateTime('nuovo_orario_di_arrivo')->nullable();
            $table->float('prezzo_biglietto', 6, 2)->unsigned();
            $table->tinyInteger('is_aviable')->unsigned()->default(1);
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
        Schema::dropIfExists('trains');
    }
}
