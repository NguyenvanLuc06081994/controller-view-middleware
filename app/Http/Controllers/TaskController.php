<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function welcome()
    {
        return view('tasks.welcome');
    }

    public function index()
    {
        $tasks = [
            '0' => [
                'title' => 'abc',
                'content' => 'abc',
                'created' => '04/08/2020',
                'date' => '07/08/2020']

        ];
        return view('tasks.list', compact('tasks'));
    }

    public function showFormAdd()
    {
        return view('tasks.add');
    }

    public function add(Request $request)
    {
        $task1 = [
            'title'=>$request->title,
            'content'=>$request->contents,
            'created'=>$request->created,
            'date'=>$request->date
            ];
//        dd($request->all());
        return view('tasks.list',compact('task1'));
    }
}
