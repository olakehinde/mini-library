<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'email'];

    /**
     * Get the books by this author.
     */
    public function books() {
        return $this->hasMany('App\Models\Book');
    }
}
