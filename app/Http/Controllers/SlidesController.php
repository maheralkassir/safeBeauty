<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;
use App\Slide;
use Illuminate\Support\Facades\File;
class SlidesController extends Controller
{
  public function index()
  {

    return view('dashboard.slides')->with('slides',Slide::all())->with('a',['active','','','','','','','','','','']);
  }
  public function store(Request $request)
  {
        if(Input::hasFile('image'))
        {
          $file = Input::file('image');
          $imageName = time().'.'.$file->getClientOriginalExtension();
          $file->move(public_path( 'SliderImages'),$imageName);
        }


      Slide::create([
          'title' => $request['title'],
          'url' => $imageName
      ]);
      return redirect()->action('SlidesController@index');
  }

  public function delete($id)
  {
    $data = Slide::Find($id);
    if(file_exists('SliderImages/' . $data['url'])){
        @unlink('SliderImages/' . $data['url']);
    }
    Slide::destroy($id);
    return redirect()->action('SlidesController@index');
  }
}
