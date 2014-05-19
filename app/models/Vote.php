<?php

class Vote extends Eloquent {

    public function posts() {

        return $this->belongsTo('Post', 'post_id');
    }

    public function users() {

        return $this->belongsTo('User', 'user_id');
    }
}