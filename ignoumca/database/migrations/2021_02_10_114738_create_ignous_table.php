<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIgnousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ignous', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('mobile');
            $table->string('emailid');
            $table->string('age');
            $table->string('gender');
            $table->string('city');
            $table->string('income');
            $table->string('experience')->nullable();
            $table->string('familymember');
            $table->timestamps();
        });
        Schema::create('product', function (Blueprint $product) {
            $product->increments('id');
            $product->string('type');
            $product->string('oftenconsume');
            $product->string('brand');
            $product->string('store');
            $product->string('factors');
            $product->string('deliverycomments');
            $product->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ignous');
    }
}

