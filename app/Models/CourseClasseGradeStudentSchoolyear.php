<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseClasseGradeStudentSchoolyear extends Model
{
    use HasFactory;
    public $table = "registrations";
    protected $guarded = ['id'];
    use SoftDeletes;
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

    public function schoolyears()
    {
        return $this->belongsTo(Schoolyear::class, 'fk_schoolyears_id');
    }
}
