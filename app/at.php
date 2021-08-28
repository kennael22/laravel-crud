<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class at extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public $timestamps = true;
}
