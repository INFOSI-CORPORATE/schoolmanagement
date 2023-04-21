<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory;
    public $table = "grades";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'course_class_grade_student_schoolyears');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_class_grade_student_schoolyears');
    }
}
