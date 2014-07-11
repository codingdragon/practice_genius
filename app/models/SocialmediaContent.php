<?php

class SocialmediaContent extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

  protected $appends = array('category');

  public function socialmedia_category() {
    return $this->belongsTo('SocialmediaCategory', 'category_id');
  }

  public function category() {
    return $this->socialmedia_category()->first()->name;
  }
}
