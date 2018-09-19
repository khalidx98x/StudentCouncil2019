<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table='books';
    protected $fillable=['title','image','url','type','college_id','is_book'];


    /**
     * return the colleage of the book/exam
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function college(){
        return $this->belongsTo('App\College');
    }

    /**
     *
     *
     */
    public function getImage()
    {
        if (!$this->image)
            return asset('emptyimage.jpg');
        return asset($this->image);
    }



}
