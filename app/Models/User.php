<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'photo', 
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function data()
    {
        return $this->hasOne(Data::class);
    }
    public function setting()
    {
        return $this->hasOne(Setting::class);
    }

}
