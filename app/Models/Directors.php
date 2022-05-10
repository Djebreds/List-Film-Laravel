<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directors extends Model
{
    use HasFactory;

    public $table = "directors";

    // testing eloquent
    public function films() {
        return $this->belongsToMany(Films::class, 'films_directors');
    }
}
