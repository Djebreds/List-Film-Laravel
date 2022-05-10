<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films_genres extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    use HasFactory;

    // testing
    protected $table = 'films_genres';
    protected $fillable = ['film_id'];
}
