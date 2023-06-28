<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transport extends Model
{
    use HasFactory;
    public $table = "transports";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
