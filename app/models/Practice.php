<?php

class Practice extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

  public function scheduledPosts() {

    return $this->belongsToMany('SocialmediaContent', 'socialmedia_practice_scheduled', 'practice_id', 'content_id');

  }

  public function postedPosts() {

    return $this->belongsToMany('SocialmediaContent', 'socialmedia_practice_posted', 'practice_id', 'content_id');

  }

  public function categoryWeights() {

    return $this->hasMany('SocialmediaCategoryWeight');

  }

}
