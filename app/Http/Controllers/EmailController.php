<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function send(Request  $request)
    {
      //For Specific Messages

      Mail::raw($request['content'], function ($message) use ($request){
            $message->to($request['to'],'Safe Beauty')->subject($request['title']);
            $message->from('maheraalkassir@gmail.com','Safe Beauty');
          });

        //For Template Messages
        /*Mail::send(['text'=>'email.mymail'],['name'=>'sara'],function($message){
          $message->to('maheralkassir@hotmail.com','to mahera')->subject('woow its work');
            $message->from('maheraalkassir@gmail.com','to mahera');
        });*/

        return redirect()->action('EmailController@NewEmail');
    }

    public function NewEmail()
    {
      return view('Dashboard.sendEmail')->with('a',['','','','','','','','','active','','']);
    }
}
