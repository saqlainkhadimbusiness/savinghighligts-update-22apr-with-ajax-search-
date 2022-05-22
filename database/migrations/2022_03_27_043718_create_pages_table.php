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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('parent_level');
            $table->string('page_name');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('meta_description')->nullable();
            $table->string('slug');
            $table->longText('content_image')->nullable();
            $table->longText('banner_image')->nullable();
            $table->longText('short_content')->nullable();
            $table->longText('long_content')->nullable();
            $table->integer('sort_order')->setDefault(1);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('pages');
    }
};
