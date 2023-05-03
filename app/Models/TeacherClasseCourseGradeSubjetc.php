<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherClasseCourseGradeSubjetc extends Model
{
    use HasFactory;
    public $table = "exams";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classe::class, 'fk_classes_id');
    }
    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_courses_id');
    }
    public function grades()
    {
        return $this->belongsTo(Grade::class, 'fk_grades_id');
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'fk_subjects_id');
    }
}
