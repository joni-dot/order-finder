<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id');
            $table->foreignId('carrier_id');
            $table->foreignId('mode_of_transport_id');
            $table->string('order_number');
            $table->text('description');
            $table->decimal('amount_vat', 8, 2);
            $table->dateTime('ordered_at')->unique();
            $table->dateTime('shipped_at')->unique();
            $table->dateTime('estimated_arrival_at')->unique();
            $table->dateTime('received_at')->unique();
            $table->timestamps();

            $table->foreign('vendor_id')
                ->references('id')
                ->on('vendors');

            $table->foreign('carrier_id')
                ->references('id')
                ->on('carriers');

            $table->foreign('mode_of_transport_id')
                ->references('id')
                ->on('mode_of_transports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
