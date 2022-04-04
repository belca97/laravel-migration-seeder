<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {


            $table->id();

            //nome pacchetto, destinazione, stato, descrizione, partenza, ritorno
            $table->string('travels_pack_name', 50);
            $table->string('destination', 50);
            $table->string('country', 50);
            $table->text('description' );
            $table->date('partenza');
            $table->date('ritorno');

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
        Schema::dropIfExists('travels');
    }
}
