<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social';
    protected $fillable = [
      'name', 'link_url', 'fa'
    ];
}
