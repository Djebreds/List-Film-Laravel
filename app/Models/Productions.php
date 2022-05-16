<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productions extends Model
{
    protected $primaryKey = 'id_production';
    protected $guarded = [];
    use HasFactory;
}
