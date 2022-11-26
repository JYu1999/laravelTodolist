<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoitemController extends Controller
{
    //
    public function index(){
        return view('todoitems.index');
    }

    public function create(){
        return view('todoitems.create');
    }

    public  function store(Request $request){
        $content = $request->validate([
           'title' => 'required',
            'content' => 'required'
        ]);
        auth()->user()->todoitems()->create($content);
        return redirect()->route('root')->with('notice','Successfully add!');
    }
}
