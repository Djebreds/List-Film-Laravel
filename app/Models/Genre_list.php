<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre_list extends Model
{
    use HasFactory;

    // testing eloquent
    public $table = "genre_lists";

    public function films() {
        return $this->belongsToMany(Films::class, 'films_genres');
    }
}
