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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->longText('Description')->nullable();
            $table->longText('content')->nullable();
            $table->longText('Organized')->nullable();
            $table->longText('Ownership')->nullable();
            $table->longText('siteusage')->nullable();
            $table->longText('Warrantiesusers')->nullable();
            $table->longText('userconduct')->nullable();
            $table->longText('Privicy')->nullable();
            $table->longText('Copyright')->nullable();
            $table->longText('termsconditions')->nullable();
            $table->longText('communication')->nullable();
            $table->longText('Disclaimer')->nullable();
            $table->longText('contactus')->nullable();
            $table->string('Slug');
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
        Schema::dropIfExists('terms');
    }
};
