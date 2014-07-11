<?php

class SocialmediaCategoryWeight extends Eloquent {
	protected $guarded = array();
  protected $table = 'socialmedia_category_practice_weights';

	public static $rules = array();

  public function practice() {

    return $this->belongsTo('Practice');

  }

  public function socialmedia_category() {

    return $this->belongsTo('SocialmediaCategory', 'category_id')->first();

  }
}
