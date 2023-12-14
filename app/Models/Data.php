<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'nik', 
        'surename', 
        'address', 
        'birthday', 
        'gender_id', 
        'education_id', 
        'job_id', 
        'religion_id', 
        'add_by', 
        'updated_by', 
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }
}
