<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;
    public $table = "courses_teachers";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_courses_id');
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }
}
