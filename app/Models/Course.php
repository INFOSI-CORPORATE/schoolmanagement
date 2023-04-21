<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    public $table = "courses";

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'course_class_grade_student_schoolyears');
    }
    

    
}
