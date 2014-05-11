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

    public function favorites() {

        return $this->hasMany('Favorite', 'post_id');
    }

    public function comments() {

        return $this->hasMany('Comment', 'post_id');
    }

    public function parent() {

        return $this->belongsTo('Post', 'parent_id');
    }

    public function children() {

        return $this->hasMany('Post', 'parent_id');
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "questions/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
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

    public function scopeArchive($query, $year, $month) {

        return $query->where(function ($query) use ($year, $month) {

            $query->where(DB::raw('YEAR(created_at)'), '=', $year)
                ->where(DB::raw('MONTH(created_at)'), '=', $month);
        });
    }

    public function scopeSearch($query, $search) {

        return $query->where(function ($query) use ($search) {

            $query->where('title', 'LIKE', "%$search%")
                ->orWhere('body', 'LIKE', "%$search%");
        });
    }
}
