<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouncilMember extends Model
{
    //
    protected $fillable=['name','image','description'];
    protected $table='council_members';


    /**
     * return the department of the member
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function department(){
        return $this->hasOne('App\Department','manager_id','id');
    }

    /**
     * return the tasks of the council member
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks(){
        return $this->hasMany('App\Task','task_council_member_id','id');
    }



}
