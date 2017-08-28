<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth')->except('sample');
    }
    
    public function index(Request $request)
    {
        $name = $request->input('name');
        switch (1){
            case 1 : 
                break;
            case 2 : 
                break;
        }
        return view('home');
    }
    
    public function createE(Request $request)
    {
        return view('create_event');
    }
}
