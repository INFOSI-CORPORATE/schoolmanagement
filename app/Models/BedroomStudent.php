<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BedroomStudent extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;
    protected $table = "bedroom_students";
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function bedrooms()
    {
        return $this->belongsTo(Bedroom::class, 'fk_bedrooms_id');
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
