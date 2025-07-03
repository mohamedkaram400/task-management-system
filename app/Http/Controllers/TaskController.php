<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->get();
        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        return view('tasks.create');
    }

    public function insert(Request $request)
    {
        $validated = $this->validateData($request);

        DB::table('tasks')->insert($validated);

        return redirect()->route('all.tasks')->with('success', 'Task created successfully!');
    }


    public function show($id)
    {
        $tasks = DB::table('tasks')->where('id', $id)->first();
        return view('tasks.show', compact('tasks'));
    }

    public function edit( $id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $validated = $this->validateData($request);
        DB::table('tasks')->where('id', $id)->update($validated);

        return redirect()->route('all.tasks')->with('success', 'Task updated successfully!');
    }

    public function delete( $id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect()->route('all.tasks');
    }

    private function validateData($request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,in_progress,completed',
            'date' => 'nullable|date',
            'priority' => 'required|in:low,medium,high',
        ]);
    }
}