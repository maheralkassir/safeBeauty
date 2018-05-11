<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Eventcateg;
use App\Event;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    public function catindex()
    {
      return view('Dashboard.eventscategories')->with('a',['','','','','','','active','','','',''])
      ->with('categories',Eventcateg::all());
    }

    public function deleteCategory($id)
    {
      Eventcateg::destroy($id);
      return redirect()->action('EventController@catindex');
    }

    public function storeCategory(Request $req)
    {
      Eventcateg::create($req->all());
      return redirect()->action('EventController@catindex');
    }

    public function index()
    {
      return view('Dashboard.events')->with('a',['','','','','','','','active','','',''])
      ->with('categories',Eventcateg::all())
      ->with('events',DB::table('events')->join('eventcategs','events.eventcateg_id','=','eventcategs.id')->select('events.*','eventcategs.name as catname')->get());
    }

    public function store(Request $req)
    {
      if(Input::hasFile('url'))
      {
        $file = Input::file('url');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path( 'events'),$imageName);
      }
      Event::create([
        'name'=>$req['name'],
        'eventcateg_id'=>$req['eventcateg_id'],
        'url'=>$imageName
      ]);
      return redirect()->action('EventController@index');
    }

    public function delete($id)
    {
      $data = Event::Find($id);
      if(file_exists('events/' . $data['url'])){
          @unlink('events/' . $data['url']);
      }
      Event::destroy($id);
      return redirect()->action('EventController@index');
    }
    public function view($id)
    {
      return view('Dashboard.viewevent')->with('a',['','','','','','','','active','','',''])
      ->with('event',DB::table('events')->where('events.id',$id)->join('eventcategs','events.eventcateg_id','=','eventcategs.id')->select('events.*','eventcategs.name as catname')->get()->first());
    }
}
