<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;

class AdminController extends Controller
{
    public function edit(Request $request)
    {
      if($request->ajax())
      {
        $date = Date::find($request->id);
        return response($date);
      }
    }
    public function postEdit()
    {
      return 'edit finished';
    }
    public function delete($id)
    {
      $date = Date::find($id);
      $date->delete();
      return redirect('/home')->with('status', 'Deleted successfully!');
    }
    public function insert(Request $request)
    {
      $inputDate = $request->input('inputDate');
      $date = new Date();
      $date->date = $inputDate;
      $date->save();
      return redirect('/home')->with('status', 'Date inserted successfully!');
    }
}
