<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = "admins";
    protected $fillable=['name','image','username','email','password','description','type'];
    protected $hidden=['password','remember_token','created_at','updated_at'];

    /**
     * return admins post
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(){
        return $this->hasMany('App\Post');

    }

    /**
     * return admin contact info
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactInfo(){
        return $this->hasOne('App\ContactInformation','admin_id','id');
    }

    /**
     * return admin tasks
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks(){
        return $this->hasMany('App\Tasks','admin_id');
    }

    /**
     * return admins report
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function report(){
        return $this->hasMany('App\Report');
    }

}
