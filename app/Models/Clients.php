<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    //
    protected $guarded = [];
    public function projects()
    {
        return $this->hasMany(ProjectsTable::class);
    }
}
