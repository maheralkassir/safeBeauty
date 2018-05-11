<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Doctorssay;
class DoctorssayController extends Controller
{
    public function index()
    {
      return  view('Dashboard.doctorssay')->with('a',['','','','','active','','','','','',''])->with('says',Doctorssay::all());
    }

    public function store(Request $req)
    {
      Doctorssay::create($req->all());
      return redirect()->action('DoctorssayController@index');
    }

    public function delete($id)
    {
      Doctorssay::destroy($id);
      return redirect()->action('DoctorssayController@index');
    }

    public function edit($id)
    {
      return  view('Dashboard.editdoctorssay')->with('a',['','','','','active','','','','','',''])
      ->with('say',Doctorssay::where('id','=',$id)->get()->first());
    }
    public function update(Request $req,$id)
    {
      Doctorssay::Find($id)->update($req->all());
      return redirect()->action('DoctorssayController@index');
    }

}
