<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Vinkla\Hashids\Facades\Hashids;
use App\Institute;
use App\JoinRequest;

class InstituteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        // $id =  Hashids::decode($id);
        $user_id = Auth::user()->id;
        $institute = Institute::where(['id'=>$id,'user_id'=>$user_id])->firstOrFail();
        $data['classrooms'] = $institute->classrooms;
        return view('classes',$data);
    }

    public function select()
    {
        return view('institute.select');
    }
    public function create()
    {
        return view('institute.create');
    }

    public function store(Request $request){

        $request->validate([
        'name' => 'required|max:255',
        'country' => 'required|max:255',
        'state' => 'required|max:255',
        'city' => 'required|max:255',
        'address' => 'required|max:255',
        'type' => 'required|in:School,University,College,Other',
        ]);
        $user_id = Auth::user()->id;
        $institute = Institute::create([
            'user_id'=>$user_id,
            'name'=>$request->name,
            'country'=>$request->country,
            'state'=>$request->state,
            'address'=>$request->address,
            'city'=>$request->city,
            'type'=>$request->type,
        ]);

        // return redirect()->route('ins.view', ['id' => Hashids::encode($institute->id)]);


    }
    public function info($id)
    {
        // $id =  Hashids::decode($id);
        $Institute = Institute::findOrFail($id);
        // return $Institute;
        $data['institute'] = $Institute->first();
        return view('institute.info',$data);
    }

    public function joinrequest($id, Request $request)
    {
        $user_id = Auth::user()->id;
        // $id =  Hashids::decode($id)[0];
        $Institute = Institute::findOrFail($id);
        $dataset = array('user_id'=>$user_id,'institute_id'=>$id);
        // return  $Institute;
        $Join = JoinRequest::updateOrCreate($dataset,$dataset);
        return redirect()->back();
    }
}
