<?php 

class SocialmediaCategoryTableSeeder extends Seeder {

  private $seeds = array(
    array('name' => 'holidays'),
    array('name' => 'seasons'),
    array('name' => 'trivia'),
    array('name' => 'current_events'),
    array('name' => 'facts'),
    array('name' => 'funny_videos'),
    array('name' => 'jokes'),
    array('name' => 'news'),
    array('name' => 'survey_published'),
    array('name' => 'review_featured'),
    array('name' => 'review_published'),
  );

  public function run() {

    DB::statement("SET FOREIGN_KEY_CHECKS=0;");
    DB::table('socialmedia_categories')->truncate();
    DB::statement("SET FOREIGN_KEY_CHECKS=1;");

    foreach ($this->seeds as $seed) {
      SocialmediaCategory::create($seed);
    }

  }

} 