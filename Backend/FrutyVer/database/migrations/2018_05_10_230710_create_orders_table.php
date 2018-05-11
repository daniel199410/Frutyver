<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->enum('state', ['pending', 'dispatched', 'refused'])->default('pending');
                $table->unsignedInteger('provider_id');
                $table->unsignedInteger('client_id');
                $table->timestamps();
                $table->foreign('provider_id')->references('id')->on('providers');
                $table->foreign('client_id')->references('id')->on('clients');
            });
        }
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
