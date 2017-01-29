<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
  protected $table = 'skills';
  protected $fillable = [
      'title', 'range_skill', 'color'
  ];
}
