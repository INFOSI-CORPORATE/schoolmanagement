<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseSubjectGrade extends Model
{
    use HasFactory;
    public $table = "courses_subjects_grades";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_courses_id');
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'fk_subjects_id');
    }

    public function grades()
    {
        return $this->belongsTo(Grade::class, 'fk_grades_id');
    }
}
