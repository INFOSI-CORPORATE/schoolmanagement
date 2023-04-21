<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    public $table = "students";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function schoolyears()
    {
        return $this->belongsToMany(Schoolyear::class, 'course_class_grade_student_schoolyears');
    }

    public function grade()
    {
        return $this->belongsToMany(Grade::class, 'course_class_grade_student_schoolyears');
    }
}
