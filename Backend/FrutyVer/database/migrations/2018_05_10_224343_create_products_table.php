<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('reference', 20)->unique()->nullable($value = false);
                $table->string('name', 10)->nullable($value = false);
                $table->integer('price')->nullable($value = false);
                $table->longtext('image')->nullable($value = false);
                $table->integer('stock')->nullable($value = false);
                $table->unsignedInteger('user_id');               
                $table->timestamps();
                $table->foreign('provider_id')->references('id')->on('providers');
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
        Schema::dropIfExists('products');
    }
}
