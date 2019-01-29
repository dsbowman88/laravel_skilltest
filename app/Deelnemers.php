<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deelnemers extends Model
{
    protected $fillable = [
        'naam', 'email', 'route'
    ];
}
