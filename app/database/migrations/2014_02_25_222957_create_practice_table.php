<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePracticeTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

    Schema::create('practices', function(Blueprint $table) {

      $table->increments('id');
      $table->string('name');
      $table->string('website');
      $table->timestamps();

    });

  }


  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {

    Schema::drop('practices');

  }

}
