<?php 

class SocialmediaCategoryWeightTableSeeder extends Seeder {

  public function run() {

    DB::statement("SET FOREIGN_KEY_CHECKS=0;");
    DB::table('socialmedia_category_practice_weights')->truncate();
    DB::statement("SET FOREIGN_KEY_CHECKS=1;");

    $practices = Practice::all();
    $categories = SocialmediaCategory::all();

    foreach ($practices as $practice) {

      foreach ($categories as $category) {

        SocialmediaCategoryWeight::create(
          array(
            'weight' => rand(0, 10),
            'practice_id' => $practice->id,
            'category_id' => $category->id
          )
        );

      }

    }

  }

} 