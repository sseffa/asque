<?php

use \Carbon\Carbon;

class User extends Cartalyst\Sentry\Users\Eloquent\User {

    protected $appends = ['age'];

    public function posts() {

        return $this->belongsTo('Posts');
    }

    public function comments() {

        return $this->belongsTo('Comments');
    }

    public function favorites() {

        return $this->hasMany('Favorite', 'user_id');
    }

    public function votes() {

        return $this->hasMany('Vote', 'user_id');
    }

    public function setAgeAttribute($value) {

        $this->attributes['age'] = $value;
    }

    public function getAgeAttribute() {

        $birthday = Carbon::createFromFormat('Y-m-d H:i:s', $this->birthday);
        $now = Carbon::now();

        return $now->diffInYears($birthday);
    }
}