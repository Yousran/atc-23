<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableRule extends Model
{
    use HasFactory;
    protected $fillable = ['view', 'add', 'edit', 'export', 'soft_delete', 'hard_delete'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function tableList()
    {
        return $this->belongsTo(TableList::class);
    }
}
