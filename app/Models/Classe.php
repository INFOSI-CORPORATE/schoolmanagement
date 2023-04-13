<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classe extends Model
{
    use HasFactory;
    public $table = "classes";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'course_class_grade_student');
    }
    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'course_class_grade_student');
    }
}
