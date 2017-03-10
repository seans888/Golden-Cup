<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    protected $fillable = ['imagePath','title','price'];
}
