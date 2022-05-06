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
}
