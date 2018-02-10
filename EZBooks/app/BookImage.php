<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookImage extends Model
{
    protected $table = "book_images";
    protected $fillable = [
        'name', 
        'book_id'
    ];
    public function book() {
        return $this->belongsTo('App\Book', 'book_id', 'id');
    }
}
