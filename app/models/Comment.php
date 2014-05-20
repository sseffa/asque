<?php

/**
 * Yorum model sınıfı
 * Class Comment
 * @author Sefa Karagöz
 */
class Comment extends Eloquent {

    // tablo adı
    protected $table = 'comments';

    /**
     * user ilişki
     * @return mixed
     */
    public function user() {

        return $this->belongsTo('User', 'user_id');
    }

    /**
     * soru ilişki
     * @return mixed
     */
    public function questions() {

        return $this->belongsTo('Post', 'post_id');
    }
}