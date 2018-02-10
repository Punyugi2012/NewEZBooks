<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = "publishers";

    protected $fillable = [
        'name',
        'surname',
        'address',
        'phone_number',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function books() {
        return $this->hasMany('App\Book');
    }

}
