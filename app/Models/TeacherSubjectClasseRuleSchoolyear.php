<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherSubjectClasseRuleSchoolyear extends Model
{
    use HasFactory;
    public $table = "contracts";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'fk_subjects_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classe::class, 'fk_classes_id');
    }

    public function rules()
    {
        return $this->belongsTo(Rule::class, 'fk_rules_id');
    }

    public function schoolyears()
    {
        return $this->belongsTo(Schoolyear::class, 'fk_schoolyears_id');
    }
}
