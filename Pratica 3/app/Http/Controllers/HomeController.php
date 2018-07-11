<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	  public function store(Request $request)
    {
       $request->request->add(['type'=>'3'],['created_at' => date('Y-m-d H:i:s')],['updated_at' => date('Y-m-d H:i:s')]);
        return view ('home');
    }
}
