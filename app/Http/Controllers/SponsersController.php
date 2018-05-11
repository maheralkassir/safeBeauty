<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponser;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input as input;

class SponsersController extends Controller
{
  public function index()
  {
    return  view('Dashboard.sponsers')->with('a',['','','','','','active','','','','',''])->with('sponsers',Sponser::all());
  }
  public function store(Request $req)
  {
    if(Input::hasFile('imageurl'))
    {
      $file = Input::file('imageurl');
      $imageName = time().'.'.$file->getClientOriginalExtension();
      $file->move(public_path( 'SponsersLogos'),$imageName);
    }
    Sponser::create([
      'name' => $req['name'],
      'imageurl' => $imageName,
      'sponurl' => $req['sponurl']
    ]);
    return redirect()->action('SponsersController@index');
  }
  public function edit($id)
  {
    return view('Dashboard.editsponser')->with('a',['','','','','','active','','','','',''])->with('sponser',Sponser::where('id','=',$id)->get()->first());
  }

  public function view($id)
  {
    return view('Dashboard.viewsponser')->with('a',['','','','','','active','','','','',''])->with('sponser',Sponser::where('id','=',$id)->get()->first());
  }

  public function update(Request $req,$id)
  {
    if(Input::hasFile('imageurl'))
    {
      $file = Input::file('imageurl');
      $imageName = time().'.'.$file->getClientOriginalExtension();
      $file->move(public_path( 'SponsersLogos'),$imageName);

      $data = Sponser::Find($id);
      if(file_exists('SponsersLogos/' . $data['imageurl'])){
          @unlink('SponsersLogos/' . $data['imageurl']);
      }
      $data->update([
        'name' => $req['name'],
        'imageurl' => $imageName,
        'sponurl' => $req['sponurl']
      ]);
    }
    else{
      $data = Sponser::Find($id);
      $data->update([
        'name' => $req['name'],
        'sponurl' => $req['sponurl']
      ]);
    }
    return redirect()->action('SponsersController@view',$id);

  }
  public function delete($id)
  {
    $data = Sponser::Find($id);
    if(file_exists('SponsersLogos/' . $data['imageurl'])){
        @unlink('SponsersLogos/' . $data['imageurl']);
    }
    Sponser::destroy($id);
    return redirect()->action('SponsersController@index');
  }
}
