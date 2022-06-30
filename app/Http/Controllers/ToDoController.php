<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function save(Request $request)
    {

        $item = new ToDoList();
        $item->todo = $request->todo;
        $item->save();
        return redirect('/')->with('success', 'item saved succesfully');
    }
    public function index()
    {
        return view('welcome', ['todos' => ToDoList::all()]);
    }
    public function delete(Request $request, $id)
    {
        $item = ToDoList::find($id);
        $item->delete();
        return redirect('/')->with('success', 'item deleted succesfully');
    }
}
