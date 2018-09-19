<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //

    protected $fillable = ['name', 'manager_id','type'];
    protected $with=['councilMember','deptActivities','contactInfo'];
    protected $table = "departments";

    /**
     * return the leader of the department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function councilMember()
    {
        return $this->belongsTo('App\CouncilMember','manager_id','id');
    }

    /**
     * return the list of activestes for the department
     */
    public function deptActivities()
    {
        return $this->hasMany('App\DepartmentActivity','department_id','id');
    }


    /**
     * return the contact info of the department
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactInfo(){
        return $this->hasOne('App\ContactInformation','department_id','id');
    }


}
