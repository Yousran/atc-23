<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = 
    [   'group_id',
        'day_id',
        'time_id',
        'tutor_id',
        'add_by',
        'updated_by'
    ];
    use HasFactory;
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function time()
    {
        return $this->belongsTo(Time::class);
    }
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
