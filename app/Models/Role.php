<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $with = ['table_rules','element_rules'];

    public function table_rules()
    {
        return $this->hasMany(TableRule::class);
    }
    public function element_rules()
    {
        return $this->hasOne(ElementRule::class);
    }

}
