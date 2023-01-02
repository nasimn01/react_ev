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
        Schema::create('addmissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birth_date');
            $table->string('birth_certificate_no');
            $table->string('image')->nullable();
            $table->string('contact');
            $table->string('email')->nullable();
            $table->string('father')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('mother')->nullable();
            $table->string('mother_nid')->nullable();
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
        Schema::dropIfExists('addmissions');
    }
};
