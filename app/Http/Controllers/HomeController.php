<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messages = Message::get();
        if((int) auth()->user()->role !== User::ROLE_ADMIN)
        {
            
            return view('home');
        }
       
        return view('panel', compact('messages'));
    }

   
    

}
