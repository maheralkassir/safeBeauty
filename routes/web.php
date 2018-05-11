<?php
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use App\Mail\MyMail;
use App\Openhour;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/','MainController@index');
Route::get('/singleservice/{id}','MainController@SingleService');
Route::get('/like/{id}','LikesController@like');

Route::get('/dashboard','SlidesController@index')->middleware('auth');


Route::get('/dash/slider','SlidesController@index')->middleware('auth');
Route::post('/dash/slider','SlidesController@store')->middleware('auth');
Route::get('/dash/slider/delete/{id}','SlidesController@delete')->middleware('auth');

Route::get('/dash/aboutus','Dashboard@aboutus')->middleware('auth');
Route::post('/dash/aboutus/update','Dashboard@aboutusUpdate')->middleware('auth');

Route::get('/dash/videos','VideoController@index')->middleware('auth');
Route::post('/dash/videos','VideoController@store')->middleware('auth');
Route::get('/dash/videos/{id}','VideoController@delete')->middleware('auth');

Route::get('/dash/location','LocationController@index')->middleware('auth');
Route::get('/dash/location/update','LocationController@makeUpdate')->middleware('auth');
Route::post('/dash/location','LocationController@update')->middleware('auth');

Route::get('/dash/sendemail','EmailController@NewEmail')->middleware('auth');
Route::post('/dash/sendemail','EmailController@send')->middleware('auth');

Route::get('dash/services','ServicesController@index')->middleware('auth');
Route::post('dash/services','ServicesController@store')->middleware('auth');
Route::get('dash/services/view/{id}','ServicesController@view')->middleware('auth');
Route::get('dash/services/edit/{id}','ServicesController@edit')->middleware('auth');
Route::post('dash/services/edit/{id}','ServicesController@update')->middleware('auth');
Route::get('dash/services/delete/{id}','ServicesController@delete')->middleware('auth');

Route::get('/dash/doctorsay','DoctorssayController@index')->middleware('auth');
Route::post('/dash/doctorsay','DoctorssayController@store')->middleware('auth');
Route::get('/dash/doctorssay/delete/{id}','DoctorssayController@delete')->middleware('auth');
Route::get('/dash/doctorssay/edit/{id}','DoctorssayController@edit')->middleware('auth');
Route::post('/dash/doctorssay/update/{id}','DoctorssayController@update')->middleware('auth');

Route::get('/dash/sponsers','SponsersController@index')->middleware('auth');
Route::post('/dash/sponsers','SponsersController@store')->middleware('auth');
Route::get('/dash/sponsers/edit/{id}','SponsersController@edit')->middleware('auth');
Route::get('/dash/sponsers/view/{id}','SponsersController@view')->middleware('auth');
Route::get('/dash/sponsers/delete/{id}','SponsersController@delete')->middleware('auth');
Route::post('/dash/sponsers/update/{id}','SponsersController@update')->middleware('auth');

Route::get('/dash/eventscategories','EventController@catindex')->middleware('auth');
Route::post('/dash/eventscategories','EventController@storeCategory')->middleware('auth');
Route::get('/dash/eventscategories/delete/{id}','EventController@deleteCategory')->middleware('auth');

Route::get('/dash/events','EventController@index')->middleware('auth');
Route::post('/dash/events','EventController@store')->middleware('auth');
Route::get('/dash/events/delete/{id}','EventController@delete')->middleware('auth');
Route::get('/dash/events/view/{id}','EventController@view')->middleware('auth');

Route::post('/dash/footer','FooterController@update');
Route::get('/dash/footer','FooterController@index');
Route::post('/dash/footer/openhours','FooterController@updOpeneningHours');

Route::post('/tt',function(Request $req){
  return $req->all();
});
Route::get('/tt',function()
{
  return view('Dashboard.opencont')->with('a',['','','','active','','','','','','','']);
});

Route::get('/test',function(){
  $arr = [];
  $arr['coco'] = ['asd'];
  if(!isset($arr['coco1'])){
    $arr['coco1']=[];
  }
  array_push($arr['coco1'], 'jojo');
  array_push($arr['coco1'], 'jojo');
  return $arr;
});

Route::get('/datetest',function(){
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
});
