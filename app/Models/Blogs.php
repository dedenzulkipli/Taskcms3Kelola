<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    //

    
    protected $guarded = [];
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }

}
