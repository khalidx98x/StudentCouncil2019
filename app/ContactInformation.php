<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    //

    protected $fillable = ['admin_id','department_id','facebook','instagram','twitter','email','phone'];
    protected $hidden=['remember_token'];
    protected $table = 'contact_information';

    /**
     * return admin of the contact info
     */
    public function AdminContactInfo(){
        $this->belongsTo('App\Admin','admin_id','id');
    }

    /**
     * return the department of the contact info
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departmentContactInfo(){
        return $this->belongsTo('App\Department','department_id','id');
    }

}
