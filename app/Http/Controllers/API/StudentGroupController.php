<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\ClassRoom;
use App\StudentGroup;
class StudentGroupController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth:api');
    }
    public function create($id,Request $request)
    {
      
      $user = Auth::guard('api')->user();
      return response()->json(['status'=>'Ok','data'=>$request->ids,'user'=>$user]);
    }
}
