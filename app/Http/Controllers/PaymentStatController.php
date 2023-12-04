<?php

namespace App\Http\Controllers;

use App\Models\PaymentStat;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PaymentStatController extends Controller
{
    public function index(){
        $tableName = 'payment-stat';
        $jsonLink = 'payment-stat/json';
        $columns = ['id', 'payment_stat_name', 'add_by', 'created_at', 'updated_at'];
    
        return view('tabel', compact('tableName', 'jsonLink', 'columns'));
    }
    public function json(){
        return DataTables::of(PaymentStat::all())->make();
    }
}
