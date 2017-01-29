<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalProfile extends Model
{
    protected $table = 'personalProfile';
    protected $fillable = [
        'slug', 'dataname', 'value', 'type'
    ];
}
