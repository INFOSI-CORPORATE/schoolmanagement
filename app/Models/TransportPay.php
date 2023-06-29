<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransportPay extends Model
{
    use HasFactory;
    public $table = "transport_pays";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }

    public function transports()
    {
        return $this->belongsTo(Transport::class, 'fk_transports_id');
    }

    public function schoolyears()
    {
        return $this->belongsTo(Schoolyear::class, 'fk_schoolyears_id');
    }

}
