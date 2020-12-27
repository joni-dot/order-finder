<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeOfTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mode_of_transports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('carrier_id')->unsigned()->nullable();
            $table->string('name');
            $table->bigInteger('price');
            $table->bigInteger('price_vat');
            $table->timestamps();

            $table->foreign('carrier_id')->references('id')->on('carriers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrier_mode_of_transports');
    }
}
