<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracks extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name','release_date','album_id','price'
    ];
}
