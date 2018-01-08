<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Resources\Users as UserResource;
use App\User;
use App\Institute;
use Vinkla\Hashids\Facades\Hashids;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware'=>'auth:api'], function()
{
  Route::post('/create/student_group/{id}','API\StudentGroupController@create')->name('student.group.create');
});
Route::post('/search-institute', function(Request $request)
{
    $keyword = $request->q;
    $institutes  = Institute::SearchByKeyword($keyword)->get();
    $result = $institutes->map(function ($item) {
        return ['name'=>$item->name,'city'=>$item->city,'state'=>$item->state,'country'=>$item->country,'id' =>Hashids::encode($item->id),'path'=>route('ins.info',Hashids::encode($item->id))];
    });
    return  response()->json(['status'=>'OK','result'=>$result->all(),'rows'=>count($result)]);
});
Route::get('/users', function()
{
    // return UserResource::collection(User::all());
    return User::all();
});
Route::bind('id', function ($id, $route) {
    return \Hashids::decode($id)[0];
});
