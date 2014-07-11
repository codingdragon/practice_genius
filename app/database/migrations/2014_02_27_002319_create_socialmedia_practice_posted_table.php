<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialmediaPracticePostedTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

    Schema::create('socialmedia_practice_posted', function(Blueprint $table) {
      $table->integer('practice_id');
      $table->integer('content_id');
    });

  }


  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {

    Schema::drop('socialmedia_practice_posted');

  }

}
