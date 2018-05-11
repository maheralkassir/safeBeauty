<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use App\Service;

use Illuminate\Support\Facades\Input as input;
use Illuminate\Support\Facades\File;


class ServicesController extends Controller
{
  public function index()
  {
    return view('Dashboard.services')->with('a',['','','active','','','','','','','',''])->with('services',Service::all());
  }

  public function store(Request $req)
  {
    if(Input::hasFile('imageurl'))
    {
      $file = Input::file('imageurl');
      $imageName = time().'.'.$file->getClientOriginalExtension();
      $file->move(public_path( 'ServiceImages'),$imageName);
    }
    Service::create([
      'title'=>$req['title'],
      'hint'=>$req['hint'],
      'content'=>$req['content'],
      'imageurl'=>$imageName,
      'drname'=>$req['drname']
    ]);
    return redirect()->action('ServicesController@index');
  }

  public function view($id)
  {
    return view('Dashboard.viewservice')->with('a',['','','active','','','','','','','',''])->with('service',Service::where('id','=',$id)->get()->first());
  }

  public function edit($id)
  {
    return view('Dashboard.editservice')->with('a',['','','active','','','','','','','',''])->with('service',Service::where('id','=',$id)->get()->first());
  }

  public function delete($id)
  {
    $data = Service::Find($id);
    if(file_exists('ServiceImages/' . $data['imageurl'])){
        @unlink('ServiceImages/' . $data['imageurl']);
    }
    Service::destroy($id);
    return redirect()->action('ServicesController@index');
  }

  public function update(Request $req,$id)
  {
    if(Input::hasFile('imageurl'))
    {
      $file = Input::file('imageurl');
      $imageName = time().'.'.$file->getClientOriginalExtension();
      $file->move(public_path( 'ServiceImages'),$imageName);

      $data = Service::Find($id);
      if(file_exists('ServiceImages/' . $data['imageurl'])){
          @unlink('ServiceImages/' . $data['imageurl']);
      }
      $data->update([
        'title'=>$req['title'],
        'hint'=>$req['hint'],
        'content'=>$req['content'],
        'imageurl'=>$imageName,
        'drname'=>$req['drname']
      ]);
    }
    else{
      $data = Service::Find($id);
      $data->update([
        'title'=>$req['title'],
        'hint'=>$req['hint'],
        'content'=>$req['content'],
        'drname'=>$req['drname']
      ]);
    }
    return redirect()->action('ServicesController@view',$id);


  }
}
