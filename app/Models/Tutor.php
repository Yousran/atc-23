<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public function data()
    {
        return $this->belongsTo('App\Models\Data');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
    use HasFactory;
}
