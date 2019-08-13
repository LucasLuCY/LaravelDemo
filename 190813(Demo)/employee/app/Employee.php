<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = "employeeId";
    public $timestamps = false; //取消自動新增功能

    function department(){
        return $this->hasOne(Department::class, 'departmentId');
    }
}
