<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class Dashboard extends Controller
{
    public function index()
    {
      return view('dashboard.slides')->with('a',['active','','','','','']);
    }
    public function aboutus()
    {
      return view('dashboard.aboutUS')->with('about',About::all()->first())->with('a',['','','','','','','','','','','active']);
    }
    public function aboutusUpdate(Request $request)
    {
      $data = About::find(1);
      if(!isset($data)){
        About::create($request->all());
      }else{
        $data->update($request->all());
      }
      return redirect()->action('Dashboard@aboutus');
    }
    public function sendmail()
    {
      return view('sendEmail')->with('a',['','','','active','','','','','','','']);
    }
}
