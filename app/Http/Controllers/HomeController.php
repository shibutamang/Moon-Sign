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
    public function index()
    {
        $date = Date::all();
        return view('home', ['date'=>$date]);
    }
    public function agents()
    {
        $agents = Agent::all();
        return view('agents', ['agents'=>$agents]);
    }
    public function delete($id)
    {
      $agent = Agent::find($id);
      $agent->delete();
      return redirect('home')->with('status', 'Agent deleted successfully');
    }
    public function customer()
    {
        return view('customer');
    }
}
