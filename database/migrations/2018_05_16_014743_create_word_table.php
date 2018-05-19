<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wordbook', function (Blueprint $table) {
            $table->increments('no')->unique();
            $table->integer('word')->references('no')->on('wordbook');
            $table->string('kanzi');
            $table->string('hiragana');
            $table->string('korean');
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
        Schema::dropIfExists('wordbook');
    }
}
