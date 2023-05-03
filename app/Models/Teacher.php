<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    public $table = "teachers";
    protected $guarded = ['id'];
    use softDeletes;
    protected $dates = ['deleted_at'];

    public function rules()
    {
        return $this->belongsToMany(Rule::class, 'teachers_rules');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'contracts');
    }

    public function classe()
    {
        return $this->belongsToMany(Classe::class, 'exams');
    }

    
}
