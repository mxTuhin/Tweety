<?php

namespace App\Http\Controllers;

use App\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    //
    public function store(){
        $todo = new ToDoList();
        $todo->user_id=auth()->id();
        $todo->text=\request()->todo_list;
        $todo->status="active";
        $todo->save();

        return redirect()->to(route('timeline_user'));
    }

    public function delete(Request $request){
        if($request->ajax()){
            $todo=ToDoList::find($request->id);
            $todo->status="closed";
            $todo->save();

            return Response("success");
        }
        return "";
    }
}
