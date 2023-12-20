<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'num_attendant',
        'num_meet',
        'status',
    ];
    use HasFactory;
    public function attendants()
    {
        return $this->hasMany(Attendant::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
