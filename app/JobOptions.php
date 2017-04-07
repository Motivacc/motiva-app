<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOptions extends Model
{
   protected $fillable = ['name'];
   protected $table = 'options';
}
