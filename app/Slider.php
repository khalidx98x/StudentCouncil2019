<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $table='slider_images';
    protected $fillable=['name','image'];

}
