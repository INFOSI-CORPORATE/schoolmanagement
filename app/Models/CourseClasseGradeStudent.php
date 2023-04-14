<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseClasseGradeStudent extends Model
{
    use HasFactory;
    public $table = "courses_classes_grades_students";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_courses_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classe::class, 'fk_classes_id');
    }

    public function grades()
    {
        return $this->belongsTo(Grade::class, 'fk_grades_id');
    }

    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }
}
