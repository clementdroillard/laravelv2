<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $fillable = ['label', 'isDone'];
    protected $casts = [
   'isDone' => 'boolean'
];
}