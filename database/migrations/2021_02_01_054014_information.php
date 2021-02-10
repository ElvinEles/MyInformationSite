<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Information extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('information_id');
            $table->text('information_name');
            $table->text('information_text');
            $table->text('information_photo');
            $table->integer('information_active')->default(0);
            $table->integer('information_countofreading')->default(0);
            $table->integer('information_category');
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
       // Schema::dropIfExists('information');
    }
}
