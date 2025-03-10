<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $guarded = [];

    public function position()
    {
        return $this->belongsTo('Position', 'position_id', 'id');
    }
    

}