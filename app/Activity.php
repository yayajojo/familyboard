<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable=['description'];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}