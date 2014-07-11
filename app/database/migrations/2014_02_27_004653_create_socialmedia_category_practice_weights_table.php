<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialmediaCategoryPracticeWeightsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

    Schema::create('socialmedia_category_practice_weights', function(Blueprint $table) {
      $table->increments('id');
      $table->integer('practice_id')->unsigned();
      $table->integer('category_id')->unsigned();
      $table->tinyInteger('weight')->unsigned();
      $table->timestamps();
    });

  }


  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {

    Schema::drop('socialmedia_category_practice_weights');

  }

}
