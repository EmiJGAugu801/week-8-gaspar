<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;

class ToDoController extends Controller
{
    //
    function getData(Request $req)
    {
        $todolist= new ToDolist;
        $todolist->what_to_do=$req->tdlist;
        $todolist->save();
    }

    function show(){

        $data= testdb::select('select what_to_do from to_do_lists');
        return view('todo',['todolists'=>$data]);
    }
}
