<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->decimal('balance', 12, 2)->nullable()->default(0);
            $table->decimal('investment_acct', 12, 2)->nullable()->default(0);
            $table->decimal('withdrawal_acct', 12, 2)->nullable()->default(0);
            $table->decimal('profit', 12, 2)->nullable()->default(0);
            $table->decimal('ref_bonus', 12,2)->default(0);

            $table->integer('status')->default(0)->nullable();
            $table->integer('admin')->default(0)->nullable();

            $table->string('currency')->default('USD');
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('telegram')->nullable();
            $table->string('date_of_birth')->nullable();

            $table->bigInteger('referred_by')->nullable();
            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->foreign('referrer_id')->references('id')->on('users');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
