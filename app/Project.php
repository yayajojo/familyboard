<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['note', 'title', 'description', 'owner_id'];


    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }


    public function addTask(array $task)
    {
        $this->tasks()->create($task);
    }

    public function activities()
    {
        return $this->hasMany('App\Activity')->latest()->limit(8);
    }

    public function recordActivity(string $description)
    {
        $this->activities()->create(['description' => $description]);
    }
}
