<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf as PDF;

class TodoController extends Controller
{
    public function index()
    {
        // Fetch all todos, ordered by creation date in descending order
        $todos = Todo::orderBy('created_at', 'desc')->paginate(7);;
        return view('blog.admin.index', ['todos' => $todos]);
    }

     public function downloadPdf()
    {
        $todos = Todo::all();
        $pdf = PDF::loadView('todos.pdf', compact('todos'));

        return $pdf->download('todos.pdf');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $todos = $request->input('title');

        // Insert data with the current timestamp
        $savedata = array(['title' => $todos, 'created_at' => now(), 'updated_at' => now()]);

        Todo::insert($savedata);

        return redirect()->route('dashboard')->with('success', 'Todo added successfully!');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('dashboard')->with('success', 'Todo deleted successfully!');
    }

    public function toggleComplete(Request $request)
    {
        $todo = Todo::findOrFail($request->id);
        $todo->completed = $request->completed;
        $todo->save();

        return response()->json(['success' => true]);
    }

}
