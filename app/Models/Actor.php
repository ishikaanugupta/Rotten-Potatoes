<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $primaryKey = 'imdbID';

    public function movies()
    {
        return $this->belongsToMany('App\Models\Movie', 'moviescasts', 'castimdbID', 'movieimdbID')->withPivot('role');
    }
}
