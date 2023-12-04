<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Religion;

class ReligionController extends Controller
{
    public function index(){
        return view('tabel');
    }
    public function json(){
        return DataTables::of(Religion::all())->make();
    }
}
