<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_stocks', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger("raw_id");
            $table->bigInteger("raw_transaction_id")->nullable();
            $table->double("debit")->default(0);
            $table->double("credit")->default(0);
            $table->string("expired_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raw_stocks');
    }
}
