<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepartmentBoss extends Model
{
    use HasFactory;
    public $table = "departments_bosses";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'fk_employees_id');
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'fk_departments_id');
    }

}
