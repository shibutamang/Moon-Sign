<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;

class AdminController extends Controller
{

    public function delete($id)
    {
      $date = Date::find($id);
      $date->delete();
      return redirect('/home')->with('status', 'Deleted successfully!');
    }
    public function insert(Request $request)
    {
      $date = new Date();
      $rdate = $request->input('date');
      $date->date = $rdate;
      $date->save();
      return redirect('/home')->with('status', 'Date inserted successfully!');
    }
}
