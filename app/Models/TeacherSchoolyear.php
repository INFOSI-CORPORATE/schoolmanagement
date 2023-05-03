<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherSchoolyear extends Model
{
    use HasFactory;
    public $table = "teachers_schoolyears";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }

    public function schoolyears()
    {
        return $this->belongsTo(Schoolyear::class, 'fk_schoolyears_id');
    }
}
