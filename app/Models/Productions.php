<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productions extends Model
{
    use HasFactory;

    // testing eloquent
    public $table = "productions";

    public function films() {
        return $this->belongsToMany(Films::class, 'films_productions');
    }

}
