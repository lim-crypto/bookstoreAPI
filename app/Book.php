<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','description','publication_year'];


    public function author()
    {
        return $this->hasManyThrough(
            'App\Author',
            'App\BookAuthor',
            'book_id', // Foreign key on books table...
            'id', // Foreign key on authors table...
            'id', // Local key on books table...
            'author_id' // Local key on authors table...
        );
    }


}
