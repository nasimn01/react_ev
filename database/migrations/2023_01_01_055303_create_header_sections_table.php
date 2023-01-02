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
        Schema::create('header_sections', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('menu_1')->nullable();
            $table->string('menu_2')->nullable();
            $table->string('menu_3')->nullable();
            $table->string('menu_4')->nullable();
            $table->string('menu_5')->nullable();
            $table->string('title')->nullable();
            $table->text('short_text')->nullable();
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
        Schema::dropIfExists('header_sections');
    }
};
