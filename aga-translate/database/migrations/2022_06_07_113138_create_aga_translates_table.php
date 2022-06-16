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
        Schema::create('aga_translates', function (Blueprint $table) {
            $table->id();
            $table->string('page_name_az');
            $table->string('page_name_en');
            $table->string('page_name_ru');
            $table->string('text_az');
            $table->string('text_en');
            $table->string('text_ru');

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
        Schema::dropIfExists('aga_translates');
    }
};