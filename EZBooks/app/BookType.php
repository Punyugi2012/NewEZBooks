<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    protected $table = 'book_types';
    protected $fillable = [
        'name'
    ];
    public function books() {
        return $this->hasMany('App\Book');
    }
}
