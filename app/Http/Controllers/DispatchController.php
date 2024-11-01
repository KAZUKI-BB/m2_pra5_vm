<?php

namespace App\Http\Controllers;

use App\Models\Dispatch;
use App\Models\Event;
use App\Models\Worker;
use Illuminate\Http\Request;

class DispatchController extends Controller
{
    public function index(){
        $dispatches = Dispatch::with('event','worker')->get();
        return view('dispatches.index',compact('dispatches'));
    }
}
