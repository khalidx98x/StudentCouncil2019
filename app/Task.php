<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=['task_owner_id','task_department_id','task_description'];
    protected $table='tasks';

    /**
     * returns the admin of the task
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin(){
        return $this->belongsTo('App\Admin','task_owner_id');

    }


    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(){
        return $this->belongsTo('App\Department','task_department_id');
    }
}
