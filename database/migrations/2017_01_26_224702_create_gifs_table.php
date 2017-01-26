<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('gifs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('seo_title')->nullable();
        $table->text('excerpt');
        $table->string('image')->nullable();
        $table->string('slug')->unique();
        $table->text('meta_description');
        $table->text('meta_keywords');
        $table->boolean('featured')->default(0);
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
        //
    }
}
