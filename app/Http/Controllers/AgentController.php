<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
    public function listAgent()
    {
      $agents = Agent::all();
      return view('agents', ['agents'=>$agents]);
    }
    public function create(Request $request)
    {
      $agent = new Agent();
      $agent->name = $request->input('name');
      $agent->address = $request->input('address');
      $agent->email = $request->input('email');
      $agent->phone = $request->input('phone');
      $agent->save();
      return redirect('/home/agents')->with('status', 'Agent saved successfully');
    }
    public function delete($id)
    {
      $agent = Agent::find($id);
      $agent->delete();
      return redirect('/home/agents')->with('status', 'Agent deleted successfully');
    }
    public function edit($id)
    {
      $agent = Agent::find($id);
      return view('agentsEdit', ['agent'=>$agent]);
    }
    public function update(Request $request, $id)
    {
      $agent = Agent::find($id);
      $agent->name = $request->input('name');
      $agent->address = $request->input('address');
      $agent->email = $request->input('email');
      $agent->phone = $request->input('phone');
      $agent->update();
      return redirect('/home/agents')->with('status', 'Agent updated successfully');
    }
}
