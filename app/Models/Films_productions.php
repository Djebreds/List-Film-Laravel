<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films_productions extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    use HasFactory;

    // testing
    protected $table = 'films_productions';
    protected $fillable = ['film_id'];


}
