<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'course_day', 'duration'];

    public function teachers()
    {
    return $this->belongsToMany('App\Teacher')
      ->withTimestamps();
    }

    public function students()
    {
    return $this->belongsToMany('App\Student')
      ->withTimestamps();
    }
}
