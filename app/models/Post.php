<?php

class Post extends Eloquent {

    public $table = 'posts';
    protected $appends = ['url', 'day', 'month', 'year'];

    public function tags() {

        return $this->belongsToMany('Tag', 'posts_tags');
    }

    public function user() {

        return $this->belongsTo('User', 'user_id');
    }

    public function comments() {

        return $this->hasMany('Comments', 'post_id');
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "article/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }

    public function getDayAttribute() {

        return date('d', strtotime($this->created_at));
    }

    public function getMonthAttribute() {

        return date('M', strtotime($this->created_at));
    }

    public function getYearAttribute() {

        return date('Y', strtotime($this->created_at));
    }
}
