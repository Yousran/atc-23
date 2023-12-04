<?php

namespace App\Http\Controllers;

use App\Models\TableList;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TableListController extends Controller
{
    public function index(){
        $tableName = 'table-list';
        $jsonLink = 'table-list/json';
        $columns = ['id', 'table_name', 'add_by', 'updated_by', 'created_at', 'updated_at'];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        return DataTables::of(TableList::all())->make();
    }
}
