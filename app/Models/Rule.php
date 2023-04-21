<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    public $table = "rules";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teachers_rules');
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'contracts');
    }

    public function schoolyears()
    {
        return $this->belongsToMany(Schoolyear::class, 'contracts');
    }
}
