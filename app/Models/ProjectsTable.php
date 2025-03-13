<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsTable extends Model
{
    //
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    // public function techStacks()
    // {
    //     return $this->belongsToMany(::class);
    // }
}
