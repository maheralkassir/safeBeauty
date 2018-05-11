<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use View;
use App\Openhour;
class FooterController extends Controller
{
    public function index()
    {
      $data = Footer::all()->first();
      if($data == null)
      {
        $data = [
          'address'=>'',
          'email'=>'',
          'copyright'=>'',
          'phone'=>''
        ];
      }
      return view('Dashboard.footer')->with('footer',$data)->with('a',['','','','active','','','','','','','']);
    }
    public function update(Request $req)
    {
      $data = Footer::all()->first();
      if($data == null) {
        Footer::create($req->all());
      }
      else {
        $data->update($req->all());
      }
      return redirect()->action('FooterController@index');
    }

    public function updOpeneningHours(Request $req)
    {
      $data = Openhour::all()->first();
      if($data == null) {
        Openhour::create([
          'd1'=>$req['d11'].'-'.$req['d12'],
          'd2'=>$req['d21'].'-'.$req['d22'],
          'd3'=>$req['d31'].'-'.$req['d32'],
          'd4'=>$req['d41'].'-'.$req['d42'],
          'd5'=>$req['d51'].'-'.$req['d52'],
          'd6'=>$req['d61'].'-'.$req['d62'],
          'd7'=>$req['d71'].'-'.$req['d72'],
        ]);
      }
      else {
        $data->update([
          'd1'=>$req['d11'].'-'.$req['d12'],
          'd2'=>$req['d21'].'-'.$req['d22'],
          'd3'=>$req['d31'].'-'.$req['d32'],
          'd4'=>$req['d41'].'-'.$req['d42'],
          'd5'=>$req['d51'].'-'.$req['d52'],
          'd6'=>$req['d61'].'-'.$req['d62'],
          'd7'=>$req['d71'].'-'.$req['d72'],
        ]);
      }
      return redirect()->action('FooterController@index');
    }
}
