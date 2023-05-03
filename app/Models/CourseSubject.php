<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseSubject extends Model
{
    use HasFactory;
    public $table = "courses_subjects";
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
}
