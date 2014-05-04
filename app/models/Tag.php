<?php

class Tag extends Eloquent {

    public $table = 'tags';
    protected $appends = ['url'];

    public function posts() {

        return $this->belongsToMany('Post', 'posts_tags');
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "/tag/" . $this->attributes['slug'];
    }
}
