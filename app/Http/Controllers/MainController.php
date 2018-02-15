<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;

class MainController extends Controller
{
    public function mainIndex()
    {
      $date = Date::all();
      return view('index', ['date'=>$date]);
    }
  
}
