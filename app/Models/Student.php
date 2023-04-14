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
        return $this->belongsToMany(Schoolyear::class, 'students_schoolyears');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_class_grade_student');
    }
}
