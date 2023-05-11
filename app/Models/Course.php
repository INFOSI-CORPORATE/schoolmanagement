<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    use softDeletes;
    protected $dates = ['deleted_at'];
    public $table = "courses";

    /** relação da Maticula */
    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'registrations');
    }

    /** relação do Exame */

    public function classe()
    {
        return $this->belongsToMany(Classe::class, 'exams');
    }
    public function grade()
    {
        return $this->belongsToMany(Grade::class, 'exams');
    }

/** Curso e Disciplina e Classe */

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'courses_subjects_grades');
    }

    
}
