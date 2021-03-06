<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class homeResourceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$todoDatas = Todo::all();
        $todoDatas = Todo::orderBy('id','desc')->get();
        // $todoDatas = Todo::groupBy('id')
        //         ->having('id', '<', 22)
        //         ->get();
               
        return view('home',compact('todoDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = request('username');
        $age = request('age');
        $task = request('task');
        $complete = request('complete');
        $todo = new Todo();
        $todo->username = $username;
        $todo->age = $age;
        $todo->task = $task;
        $todo->complete = $complete;
        $todo->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $home)
    {
        //$post = Todo::findOrFail($id);
        $post = $home;
        return view('show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $home)
    {
        //$post = Todo::findOrFail($id);
        $post = $home;
        return view('edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $home)
    {
        //$post = Todo::findOrFail($id);
        $post = $home;
        $post->username = request('username');
        $post->age  = request('age');
        $post->task = request('task');
        $post->complete = request('complete');
        $post->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $home)
    {
        $home->delete();
        //Todo::findOrFail($id)->delete();
       
        
        return redirect('/home');
    }
}
