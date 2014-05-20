<?php

/**
 * Beğeni model sınıfı
 * Class Favorite
 * @author Sefa Karagöz
 */
class Favorite extends Eloquent {

    public $table = 'favorites';

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