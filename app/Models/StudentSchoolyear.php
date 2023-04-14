<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSchoolyear extends Model
{
    use HasFactory;
    public $table = "students_schoolyears";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }

    public function schoolyears()
    {
        return $this->belongsTo(Schoolyear::class, 'fk_schoolyears_id');
    }
}
