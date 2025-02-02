<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Albums extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name','release_date','price'
    ];

}
