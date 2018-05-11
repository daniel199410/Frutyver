<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('providers')) {
            Schema::create('providers', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->unsignedInteger('user_id')->unique();
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users');               
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
        Schema::dropIfExists('providers');
    }
}
