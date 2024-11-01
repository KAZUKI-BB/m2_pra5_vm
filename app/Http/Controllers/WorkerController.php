<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(){
        $workers = Worker::all();
        return view('workers.index',compact('workers'));
    }

    public function create(){
        return view('workers.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:workers,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Worker::create($validated);

        return redirect()->route('workers.index')->with('success','人材が登録されました。');
    }

    public function update(Request $request, Worker $worker){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:workers,email,'. $worker->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $worker->update($validated);

        return redirect()->route('workers.index')->with('success','人材情報が更新されました');
    }

    public function destroy(Worker $worker){
        $worker->delete();

        return redirect()->route('workers.index')->with('success','人材が削除されました');
    }


}
