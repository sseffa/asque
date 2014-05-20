<?php

/**
 * Etiket model sınıfı
 * Class Tag
 * @author Sefa Karagöz
 */
class Tag extends Eloquent {

    // tablo adı
    public $table = 'tags';

    // yeni özellikler
    protected $appends = ['url'];

    /**
     * gönderi ilişki
     * @return mixed
     */
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
