<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Date;
use App\Agent;

class MainController extends Controller
{
    public function mainIndex()
    {
      $date = Date::all();
      return view('index', ['date'=>$date]);
    }
    public function getDate()
    {
      $date = Date::all();
      $agent = Agent::all();
      return view('bookmark', ['date'=>$date, 'agent'=>$agent]);
    }

    public function send (Request $request)
    {
      $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'phone' => 'required'
        ]);

      //sending mail to the respective agent
      $this->sendMailToAgent($request);

      $user_email = $request->input('email');
      $data = ['user_name'=>$request->input('fname'), 'user_date'=>$request->input('date')];

      //sending mail to the current user
      Mail::send(['html'=>'mailview'], ['data_array'=>$data], function($message) use ($request) {
       $message->to($request->input('email'))->subject('Thank you for your bookmark');
       $message->from('moonsign@gmail.com');
      });
     return view('thankyou');

    }
    public function sendMailToAgent (Request $request)
    {
      $date = ['selected_date'=>$request->get('date_select')];
      
      Mail::send(['html'=>'agentMailView'], ['date'=>$date], function($message) use ($request) {
       $message->to($request->get('agent_select'))->subject('New bookmark received');
       $message->from('moonsign@gmail.com');
      });
     //return view('thankyou');
    }

}
