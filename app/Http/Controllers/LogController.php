<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(){
        return view('logs');
    }

    public function getLogs(){
        $logs = Log::orderBy('created_at', 'desc')->get();
        foreach ($logs as $log) {
            $log->created_at = $log->created_at->toIso8601String();
        }
        return response()->json($logs);
    }
    
    

    public static function logs($event, $username){
        $logs = new Log;
        $logs->event = $event;
        $logs->username = $username;
        $logs->save();
    }
    
}
