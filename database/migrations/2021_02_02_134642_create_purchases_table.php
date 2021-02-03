<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('suplier_id');
            $table->integer('category_id');
            $table->integer('product_id');
            $table->string('bill');
            $table->integer('price');
            $table->dateTime('purchase_date')->default('2020-01-01 00:00:00');
            $table->dateTime('expired_date')->default('2020-01-01 00:00:00');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
