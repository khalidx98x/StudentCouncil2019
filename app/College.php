<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    protected $fillable = ['name'];
    protected $table = 'colleges';

    /**
     * return books\exams of the college
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(){
        return $this->hasMany('App\Book','college_id','id');
    }


}
