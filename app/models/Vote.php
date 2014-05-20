<?php

/**
 * Oylama model sınıfı
 * Class Vote
 * @author Sefa Karagöz
 */
class Vote extends Eloquent {

    // tablo adı
    public $table = 'votes';

    /**
     * gönderi ilişki
     * @return mixed
     */
    public function posts() {

        return $this->belongsTo('Post', 'post_id');
    }

    /**
     * üye ilişki
     * @return mixed
     */
    public function users() {

        return $this->belongsTo('User', 'user_id');
    }
}