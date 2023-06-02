<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tuition extends Model
{
    use HasFactory;
    public $table = "tuitions";
    protected $guarded = ['id'];
    use SoftDeletes;
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