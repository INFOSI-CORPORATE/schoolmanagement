<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    public $table = "subjects";
    protected $guarded = ['id'];
    use softDeletes;
    protected $dates = ['deleted_at'];

    /** Relação do Contracto do professor */
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'contracts');
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'contracts');
    }

    /** Curso e Disciplina e Classe */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_subjects_grades');
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'courses_subjects_grades');
    }

    /** Relação do Exame */
    public function grade()
    {
        return $this->belongsToMany(Grade::class, 'exams');
    }
}
