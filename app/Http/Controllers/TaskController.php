<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks = [];

    public function index(){
        $tasks = session()->get('tasks', []);
        return view('tasks/index', ['tasks' => $tasks]);
    }

    public function save(Request $request){
        $tasks = session()->get('tasks', []);
        $tasks[] = $request->input('task');
        session()->put('tasks', $tasks);

        return redirect('/');
    }

    public function edit($id){
        $tasks = session()->get('tasks', []);
        $task = $tasks[$id];

        return view('tasks/edit', ['task' => $task, 'id' => $id]); 
    }

    public function update(Request $request, $id){
        $tasks = session()->get('tasks', []);
        $tasks[$id] = $request->input('task');
        session()->put('tasks', $tasks);

        return redirect('/');
    }

    public function delete($id){
        $tasks = session()->get('tasks', []);
        unset($tasks[$id]);
        session()->put('tasks', $tasks);

        return redirect('/');
    }
}

