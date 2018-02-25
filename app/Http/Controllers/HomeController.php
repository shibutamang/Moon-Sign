<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;
use App\Agent;

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

    public function customer()
    {
        return view('customer');
    }

    public function index()
    {
      $date = Date::all();
      return view('home', ['date'=>$date]);
    }
    public function edit ($id)
    {
      $date = Date::find($id);
      return view('homeEdit', ['date'=>$date]);
    }
    public function update (Request $request, $id)
    {
  
      $date = Date::find($id);
      $date->date = $request->input('date');
      $date->update();
      return redirect('/home')->with('status', 'Current date updated succssfully');
    }

}
