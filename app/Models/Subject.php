<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    public $table = "subjects";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'contracts');
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'contracts');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_subjects');
    }
}
