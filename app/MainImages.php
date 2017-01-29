<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainImages extends Model
{
    protected $table = 'main_images';
    protected $fillable = [
      'image', 'slag'
    ];
}
