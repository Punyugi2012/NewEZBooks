<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'name',
        'surname',
        'phone_number',
        'address',
        'gender',
        'birthday',
        'image_profile',
        'user_id'
    ];
    public function user() {
        $this->belongsTo('App\User', 'user_id');
    }
    public function comments() {
        return $this->hasMany('App\Comment');
    }
    public function purchases() {
        return $this->hasMany('App\Purchase');
    }
    public function votes() {
        return $this->hasMany('App\Vote');
    }
    public function account() {
        return $this->hasOne('App\Account');
    }
}
