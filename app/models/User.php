<?php

use \Carbon\Carbon;

/**
 * Üye model sınıfı
 * Class User
 * @author Sefa Karagöz
 */
class User extends Cartalyst\Sentry\Users\Eloquent\User {

    // yeni özellikler
    protected $appends = ['age'];

    /**
     * gönderi ilişki
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function posts() {

        return $this->belongsTo('Posts');
    }

    /**
     * yorum ilişki
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comments() {

        return $this->belongsTo('Comments');
    }

    /**
     * beğeni ilişki
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favorites() {

        return $this->hasMany('Favorite', 'user_id');
    }

    /**
     * oylama ilişki
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
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