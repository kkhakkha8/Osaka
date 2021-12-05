<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $todoDatas = Todo::all();
        return view('home',compact('todoDatas'));
    }
    
}
