<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory;
    public $table = "grades";
    protected $guarded = ['id'];
    use softDeletes;
    protected $dates = ['deleted_at'];

    /** Relação das matrículas */
    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'registrations');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'registrations');
    }

    /** Relação do Exame */

    public function course()
    {
        return $this->belongsToMany(Course::class, 'exams');
    }
    public function subject()
    {
        return $this->belongsToMany(Subject::class, 'exams');
    }

    /** Curso e Disciplina e Classe */

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'courses_subjects_grades');
    }
}
