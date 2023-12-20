<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    protected $fillable = [
        'course_id',
        'group_id',
        'nik',
        'surename',
        'address',
        'birthday',
        'gender_id',
        'education_id',
        'job_id',
        'religion_id',
        'status',
        'payment',
        'payment_stat_id',
        'updated_by',
    ];
    public function data()
    {
        return $this->belongsTo(Data::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    use HasFactory;
}
