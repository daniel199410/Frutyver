<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('bills')) {
            Schema::create('bills', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('amount')->default(0);
                $table->unsignedInteger('prduct_id');
                $table->unsignedInteger('order_id');                
                $table->timestamps();
                $table->foreign('product_id')->references('id')->on('products');
                $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('bills');
    }
}
