<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";
    protected $fillable = [
        'name', 
        'email', 
        'phone'
    ];
    public function books() {
        return $this->belongsToMany('App\Book', 'author_books');
    }
}
