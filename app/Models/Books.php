<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable=[
        'title',
        'author',
        'price',
        'year',
        'publisher',
        'picture',
        'type_id'
    ];
}
