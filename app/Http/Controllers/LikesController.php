<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Service;

class LikesController extends Controller
{
    public function like($id)
    {
      $data = Like::whereServiceId($id)->whereIp(\Request::getClientIp(true))->get()->first();
      if(!isset($data)){
        Like::create([
          'service_id'=>$id,
          'ip'=>\Request::getClientIp(true)
        ]);
        $data1 = Service::Find($id);
        $data1->update([
          'likes'=>$data1['likes'] + 1
        ]);
        return 'Like';
      }
      else {
        $data->delete();
        $data1 = Service::Find($id);
        $data1->update([
          'likes'=>$data1['likes'] - 1
        ]);
        return 'DisLike';
      }
    }
}
