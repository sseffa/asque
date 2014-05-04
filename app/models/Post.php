<?php

class Post extends Eloquent {

    public $table = 'posts';
    protected $appends = ['url'];

    public function tags() {

        return $this->belongsToMany('Tag', 'posts_tags');
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "article/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}
