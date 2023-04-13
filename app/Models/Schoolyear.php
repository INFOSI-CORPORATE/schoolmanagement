<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schoolyear extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'students_schoolyears');
    }
}
