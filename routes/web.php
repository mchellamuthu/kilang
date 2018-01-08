<?php
// use Excel;
// use PDF;
use Illuminate\Http\Request;

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

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['domain'=>'dexter.dev'], function () {
    Auth::routes();
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::group(['domain'=>'teach.dexter.dev','middleware'=>'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/institute/select', 'Teacher\InstituteController@select')->name('ins.select');
    Route::get('/institute/create', 'Teacher\InstituteController@create')->name('ins.create');
    Route::post('/institute/create', 'Teacher\InstituteController@store');

    Route::get('/institute/{id}/staffs', 'StaffController@index')->name('staffs');
    Route::post('/institute/{id}/staffs', 'StaffController@create')->name('staffs');
    Route::get('/institute/{id}/staffs/groups', 'StaffController@showGroups')->name('staff.groups');
    Route::post('/institute/{id}/staffs/groups', 'StaffController@createGroup')->name('staff.groups');
    Route::get('/institute/{id}/staffs/groups/{groupid}', 'StaffController@getGroup')->name('staff.group.info');

    Route::get('/institute/{id}/info', 'Teacher\InstituteController@info')->name('ins.info');
    Route::post('/institute/{id}/joinrequest', 'Teacher\InstituteController@joinrequest')->name('ins.join');
    Route::get('/institute/{id}', 'Teacher\InstituteController@index')->name('ins.view');
    // Classroom routes
    Route::get('/class/create/{id}', 'Teacher\ClassController@create')->name('class.create');
    Route::post('/class/create/{id}', 'Teacher\ClassController@store')->name('class.create');
    // Route::get('/class/{id}/invites', 'Teacher\ClassController@ShowInviteStudents')->name('prepare.invites');
    Route::get('/class/{id}/invites', 'Teacher\ClassController@ShowInviteStudents')->name('class.students.invites');
    Route::post('/class/{id}/invites', 'Teacher\ClassController@downloadInvites')->name('class.students.invites');
    Route::get('/class/{id}/students', 'Teacher\ClassController@addStudents')->name('class.students');
    Route::post('/class/{id}/students', 'Teacher\ClassController@importStudents')->name('class.students.add');
    Route::get('/class/{classid}/info', 'Teacher\ClassController@edit')->name('class.edit');
    Route::post('/class/{classid}/info', 'Teacher\ClassController@update')->name('class.edit');
    Route::get('class/{classid}', 'Teacher\ClassController@index')->name('class.view');
    // Class group
    Route::get('class/{classid}/group', 'Teacher\ClassController@showGroup')->name('class.group.view');


    Route::post('/excel/confirm', function (Request $request) {
        $user_data = array();
        foreach ($request->full_name as $key => $value) {
            $full_name = $request->input('full_name')[$key];
            $name_array =  explode(' ', $full_name);
            $first_name = $name_array[0];
            $last_name = str_replace($name_array[0], '', $full_name);
            $last_name  = trim($last_name);
            $user_data[] = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$request->input('email')[$key],'roll_no'=>$request->input('roll_no')[$key],'mobile_no'=>$request->input('mobile_no')[$key]);
        }
        return response()->json(['status'=>'success','data'=>$user_data]);
    })->name('excel.confirm');

    Route::post('/excel/read', function (Request $request) {
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get();
            if (!empty($data) && $data->count()) {
                if (!empty($data->toArray())) {
                    return response()->json(['status'=>'success','data'=>$data->toArray()]);
                }
            }
        }
        return response()->json(['status'=>'failed']);
    })->name('read.excel');
});




Route::bind('id', function ($id, $route) {
    return \Hashids::decode($id)[0];
});
Route::bind('classid', function ($id, $route) {
    return \Hashids::decode($id)[0];
});
