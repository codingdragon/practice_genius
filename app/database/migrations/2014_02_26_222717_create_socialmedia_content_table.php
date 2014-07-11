<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialmediaContentTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

    Schema::create('socialmedia_contents', function(Blueprint $table) {

      $table->increments('id');
      $table->integer('practice_id')->unsigned()->nullable()->default(NULL);
      $table->integer('category_id')->unsigned();
      $table->string('title');
      $table->text('content');
      $table->timestamps();

      $table->foreign('practice_id')->references('id')->on('practices');

    });

  }


  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {

    Schema::drop('socialmedia_contents');

  }

}
