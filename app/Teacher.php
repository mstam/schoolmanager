<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'age', 'email'];
    
    public function courses()
    {
    return $this->belongsToMany('App\Course')
      ->withTimestamps();
    }
}
