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
    use softDeletes;
    protected $dates = ['deleted_at'];

    /** Relacão da Matricula */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'registrations', 'fk_classes_id', 'fk_courses_id');
    }
    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'registrations', 'fk_classes_id', 'fk_grades_id');
    }

    /** Relacão do Contracto do Professor */
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'contracts', 'fk_classes_id', 'fk_subjects_id');
    }

    public function rules()
    {
        return $this->belongsToMany(Rule::class, 'contracts', 'fk_classes_id', 'fk_rules_id');
    }

    /** Relacão do Exame */
    
    public function teacher()
    {
        return $this->belongsToMany(Teacher::class, 'exams', 'fk_classes_id', 'fk_teachers_id');
    }
    public function course()
    {
        return $this->belongsToMany(Course::class, 'exams', 'fk_classes_id', 'fk_courses_id');
    }
}
