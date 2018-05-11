<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Location;
class LocationController extends Controller
{
    public function index()
    {
      $currPlace = Location::max('id');

      if($currPlace)
      {
        return view('Dashboard.location')->with('data',Location::where('id','=',$currPlace)->get()->first())->with('a',['','','','','','','','','','active','']);
      }
      return redirect()->action('LocationController@makeUpdate');

    }
    public function update(Request $request)
    {
      Location::create($request->all());
      return redirect()->action('LocationController@index');
    }
    public function makeUpdate()
    {
      $currPlace = Location::max('id');
      $data = [];
      if(!$currPlace)
      {
        $data['lat'] = 27.72;
        $data['lng'] = 85.36;
      }
      return view('Dashboard.UpdateLocation')->with('data',Location::where('id','=',$currPlace)->get()->first())->with('a',['','','','','','','','','','active','']);
    }
}
