<?php

class PracticeTableSeeder extends Seeder {

  public function run() {

    DB::statement("SET FOREIGN_KEY_CHECKS=0;");
    DB::table('practices')->truncate();
    DB::statement("SET FOREIGN_KEY_CHECKS=1;");

    Practice::create(array(
      'name' => 'Tooths Arrr Us',
      'website' => 'toothsarrrus.com'
    ));

    Practice::create(array(
      'name' => 'Super Smiles',
      'website' => 'supersmiles.com'
    ));

    Practice::create(array(
      'name' => 'Acme Ortho',
      'website' => 'acmeortho.com'
    ));

    Practice::create(array(
      'name' => 'Applefield Ortho',
      'website' => 'supersmiles.com'
    ));

    Practice::create(array(
      'name' => 'Stonebrook Orthodontics',
      'website' => 'stonebrookortho.com'
    ));

    Practice::create(array(
      'name' => 'Orange City Orthodontics',
      'website' => 'orangecityortho.com'
    ));

    Practice::create(array(
      'name' => 'Sunnyside Orthodontics',
      'website' => 'sunnysideortho.com'
    ));

  }

}
