<?php

namespace App\Http\Controllers;

use App\Models\TableRule;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TableRuleController extends Controller
{
    public function index(){
        $tableName = 'table-rule';
        $jsonLink = 'table-rule/json';
        $columns = [
            'role.role_name', 
            'tableList.table_name', 
            'view', 
            'add', 
            'edit', 
            'import', 
            'soft_delete', 
            'hard_delete', 
            'add_by', 
            'updated_by',
            'created_at',
            'updated_at',
        ];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        $tableRules = TableRule::with(['role', 'tableList'])->get();
    
        return DataTables::of($tableRules)
            ->addColumn('tableList.table_name', function ($tableRule) {
                return $tableRule->tableList->table_name;
            })
            ->make(true);
    }
    
}
