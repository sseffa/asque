<?php

class Comment extends Eloquent {

    protected $table = 'comments';

    public function user() {

        return $this->belongsTo('User', 'user_id');
    }

    public function questions() {

        return $this->belongsTo('Post', 'post_id');
    }
}