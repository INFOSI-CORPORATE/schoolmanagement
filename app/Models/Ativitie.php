<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ativitie extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "ativities";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
