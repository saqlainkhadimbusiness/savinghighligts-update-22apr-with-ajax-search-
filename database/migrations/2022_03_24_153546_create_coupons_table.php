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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_title');
            $table->string('Affilate_Link');
            $table->integer('catgry_id')->nullable();
            $table->unsignedBigInteger('store_id')->nullable();
            $table->string('coupon_code');
            $table->integer('status')->default(1);
            $table->string('expiry_date');
            $table->string('Description');
            $table->string('Cupon_type');
            $table->integer('position')->nullable();
            $table->timestamps();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
