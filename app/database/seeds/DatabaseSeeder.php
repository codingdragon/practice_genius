<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PracticeTableSeeder');
		$this->call('SocialmediaCategoryTableSeeder');
    $this->call('SocialmediaCategoryWeightTableSeeder');
    $this->call('SocialmediaContentTableSeeder');
	}

}