<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public function data()
    {
        return $this->belongsTo(Data::class);
    }
    
    public function user()
    {
        return $this->data->user();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    use HasFactory;
}
