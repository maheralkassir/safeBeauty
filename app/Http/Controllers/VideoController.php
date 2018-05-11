<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Input as input;
use File;
use Storage;
use URL;
use Carbon\Carbon;
class VideoController extends Controller
{
  public function index()
  {

    return view('dashboard.videos')->with('videos',Video::all())->with('a',['','active','','','','','','','','','']);
  }
  public function store(Request $request)
  {
        if(Input::hasFile('video'))
        {
          $file = Input::file('video');
          $videoName = time().'.'.$file->getClientOriginalExtension();
          $file->move(public_path( 'Videos'),$videoName);
        }


      Video::create([
          'title' => $request['title'],
          'url' => $videoName
      ]);
      return redirect()->action('VideoController@index');
  }


    public function delete($id)
    {
      $data = Video::Find($id);

    //  return dd($data['url']);
      if(file_exists('Videos/'.$data['url'])){
        File::delete('Videos/'.$data['url']);
      }
      Video::destroy($id);
      return redirect()->action('VideoController@index');
    }

}
