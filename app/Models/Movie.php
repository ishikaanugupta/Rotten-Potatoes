<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $primaryKey = 'imdbID';

    public function actors()
    {
        return $this->belongsToMany('App\Models\Actor', 'moviescasts', 'movieimdbID', 'castimdbID')->withPivot('role');
    }
}
