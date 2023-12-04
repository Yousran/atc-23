<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableRule extends Model
{
    use HasFactory;
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function tableList()
    {
        return $this->belongsTo(TableList::class);
    }
}
