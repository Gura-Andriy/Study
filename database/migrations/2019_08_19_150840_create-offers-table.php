<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{

    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->float('price')->nullable();
            $table->string('currency')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('user_id')->index();
            $table->bigInteger('category_id')->index();
            $table->text('images')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
