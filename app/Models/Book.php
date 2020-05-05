<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'pages', 'author_id'];

    /**
     * Get the author that owns the book.
     */
    public function author() {
        return $this->belongsTo('App\Models\Author');
    }
}
