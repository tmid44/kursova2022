<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('crypto_id');

            $table->double('amount');
            $table->double('buy_price');

            $table->timestamps();

            $table->index('user_id', 'crypto_user_user_idx');
            $table->index('crypto_id', 'crypto_user_crypto_idx');

            $table->foreign('user_id','crypto_user_user_fk')->on('users')->references('id');
            $table->foreign('crypto_id','crypto_user_crypto_fk')->on('cryptos')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crypto_users');
    }
};
