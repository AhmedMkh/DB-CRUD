<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){

        $tasks = DB::table('tasks')->get();
        return view('tasks.index', compact('tasks'));

}
public function show($id){

    $task = DB::table('tasks')->find($id);
    return view('tasks.show',compact('task'));

}
public function store (Request $req){
    $task = DB::table('tasks')->insert([
        'name'=> $req -> name,
        'created_at'=> now(),
        'updated_at'=> now()
    ]);
    return redirect()->back();

}
public function destroy($id){
    $delete = DB::table('tasks')->where('id',$id)->delete();
    return redirect()->back();
}

}
