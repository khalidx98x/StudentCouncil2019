<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentActivity extends Model
{
    //
    protected $table='departments_activities';
    protected $fillable = ['department_id','southern_committee_id','name','image','body'];

    /**
     * return the department of the activity
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(){
        return $this->belongsTo('App\Department','department_id','id');
    }


    public function southernCommittee(){
        return $this->belongsTo('App\SouthernCommittee','southern_committee_id','id');
    }
}
