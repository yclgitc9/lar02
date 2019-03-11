<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;

class Employee extends Model
{
    protected $fillable = ['name', 'last_name', 'salary', 'department_id'];

    public function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
