<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres_films extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'genre_id';
    protected $guarded = [];
    use HasFactory;
}
