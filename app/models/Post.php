<?php

/**
 * Gönderi model sınıfı
 * Class Post
 */
class Post extends Eloquent {

    // tablo adı
    public $table = 'posts';

    // yeni özellikler
    protected $appends = ['url', 'day', 'month', 'year'];

    /**
     * etiket ilişki
     * @return mixed
     */
    public function tags() {

        return $this->belongsToMany('Tag', 'posts_tags');
    }

    /**
     * üye ilişki
     * @return mixed
     */
    public function user() {

        return $this->belongsTo('User', 'user_id');
    }

    /**
     * beğeni ilişki
     * @return mixed
     */
    public function favorites() {

        return $this->hasMany('Favorite', 'post_id');
    }

    /**
     * oylama ilişki
     * @return mixed
     */
    public function votes() {

        return $this->hasMany('Vote', 'post_id');
    }

    /**
     * yorum ilişki
     * @return mixed
     */
    public function comments() {

        return $this->hasMany('Comment', 'post_id');
    }

    /**
     * Parent ilişki
     * @return mixed
     */
    public function parent() {

        return $this->belongsTo('Post', 'parent_id');
    }

    /**
     * Child ilişki
     * @return mixed
     */
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

    /**
     * arşivlenen verileri döner
     * @param $query
     * @param $year
     * @param $month
     * @return mixed
     */
    public function scopeArchive($query, $year, $month) {

        return $query->where(function ($query) use ($year, $month) {

            $query->where(DB::raw('YEAR(created_at)'), '=', $year)
                ->where(DB::raw('MONTH(created_at)'), '=', $month);
        });
    }

    /**
     * arama yapar
     * @param $query
     * @param $search
     * @return mixed
     */
    public function scopeSearch($query, $search) {

        return $query->where(function ($query) use ($search) {

            $query->where('title', 'LIKE', "%$search%")
                ->orWhere('body', 'LIKE', "%$search%");
        });
    }
}
