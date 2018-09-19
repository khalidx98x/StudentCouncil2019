<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SouthernCommittee extends Model
{
    //
    protected $table='southern_committee';
    protected $fillable=['body'];

    /**
     * returns the actives of Southern Committee
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activites(){
    return $this->hasMany('App\DepartmentActivity','southernCommittee_id','id');
    }
}
