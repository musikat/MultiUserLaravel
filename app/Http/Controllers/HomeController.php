<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Films;

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
        return view('client');
    }
    public function admin()
    {
        return view('admin');
    }
    public function client()
    {
        $films = Films::all(); // Retrieve all films from the database
       return view('client', compact('films')); // Pass the films to the view
    }

    



}
