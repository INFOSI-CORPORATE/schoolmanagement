<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherRule extends Model
{
    use HasFactory;
    public $table = "teachers_rules";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }

    public function rules()
    {
        return $this->belongsTo(Rule::class, 'fk_rules_id');
    }
    
}
