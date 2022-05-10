<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Films extends Model
{
    protected $primaryKey = 'id_film';
//    protected $fillable = ['id_film', 'title', 'picture', 'trailer', 'runtime', 'release_date', 'synopsis'];
    protected $guarded = [];
    use HasFactory;
    public $table = "films";


    // testing eloquent
    public function productions() {
        return $this->belongsToMany(Productions::class, 'films_productions');
    }

    public function directors() {
        return $this->belongsToMany(Directors::class, 'films_directors');
    }

    public function genres() {
        return $this->belongsToMany(Directors::class, 'films_genres');
    }
}
