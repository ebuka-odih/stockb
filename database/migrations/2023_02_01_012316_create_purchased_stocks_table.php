<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_stocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id');
            $table->bigInteger('stock_id');
            $table->decimal('amount', 12, 2);
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchased_stocks');
    }
}
