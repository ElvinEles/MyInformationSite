<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Athorswords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athorwords', function (Blueprint $table) {
            $table->increments('athorwords_id');
            $table->text('athorwords_name');
            $table->text('athorwords_text');
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
         //  Schema::dropIfExists('categories_all');
    }
}
