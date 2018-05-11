<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use View;
use App\Slide;
use App\About;
use App\Location;
use App\Video;
use App\Sponser;
use App\Doctorssay;
use App\Eventcateg;
use App\Event;
use App\Service;
use App\Like;
use App\Footer;
use App\Openhour;

class MainController extends Controller
{
    public function getOptimizedOpeneningHours()
    {
      $res = Openhour::select('d1','d2','d3','d4','d5','d6','d7')->get()->first();
      $dates = [$res['d1'],$res['d2'],$res['d3'],$res['d4'],$res['d5'],$res['d6'],$res['d7']];
      $last="";
      $arr = array();
      $cnt = -1;
      $days = ['saturday','sunday','monday','tuesday','wednesday','thusday','friday'];
      $daysCnt = 0;
      foreach ($dates as $date) {
        if($date == $last){
          array_push($arr[$cnt], $days[$daysCnt++]);
        }
        else{
          $last = $date;
          $cnt++;
          array_push($arr, []);
          array_push($arr[$cnt], $last);
          array_push($arr[$cnt], $days[$daysCnt++]);
        }
      }
      return $arr;
    }
    public function index()
    {
      $res = Openhour::select('d1','d2','d3','d4','d5','d6','d7')->get()->first();
      $dates = [$res['d1'],$res['d2'],$res['d3'],$res['d4'],$res['d5'],$res['d6'],$res['d7']];
      $last="";
      $arr = array();
      $cnt = -1;
      $days = ['saturday','sunday','monday','tuesday','wednesday','thusday','friday'];
      $daysCnt = 0;
      /*foreach ($dates as $date) {
        if($date == $last){
          array_push($arr[$cnt], $days[$daysCnt++]);
        }
        else{
          $last = $date;
          $cnt++;
          array_push($arr, []);
          array_push($arr[$cnt], $last);
          array_push($arr[$cnt], $days[$daysCnt++]);
        }
      }*/
      //return \Request::getClientIp(true);
      return view('main.MainView')
      ->with('slides',Slide::all())
      ->with('about',About::all()->first())
      ->with('map',Location::where('id','=',Location::max('id'))->get()->first())
      ->with('videos',Video::all())
      ->with('sponsers',Sponser::all())
      ->with('says',Doctorssay::all())
      ->with('categs',Eventcateg::all())
      ->with('events',Event::all())
      ->with('services',DB::table('services')
                          ->leftJoin('likes',function($join){
                                        $join->on('services.id','=','likes.service_id')
                                        ->where('likes.ip','=',\Request::getClientIp(true));
                                      })->select('services.*','likes.service_id as liked')->get())
      ->with('footer',Footer::all()->first())
      ->with('opens',$arr);
;
    }
    public function SingleService($id)
    {
      $data = Service::Find($id);
      $data->update([
        'seenTimes'=>$data['seenTimes'] + 1
      ]);
      return view('main.singleservice')
      ->with('says',Doctorssay::all())
      ->with('service',DB::table('services')->where('services.id','=',$id)
                          ->leftJoin('likes',function($join){
                                        $join->on('services.id','=','likes.service_id')
                                        ->where('likes.ip','=',\Request::getClientIp(true));
                                      })->select('services.*','likes.service_id as liked')->get()->first());
    }
}
