<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClassRoom;
use App\Student;
use App\Institute;
use Auth;
use Hashids;
use App\User;
use App\Teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id, Request $request)
    {
        // $id = Hashids::decode($id);
        $user_id = Auth::user()->id;
        $institute = ClassRoom::where(['id'=>$id,'user_id'=>$user_id])->firstOrFail();
        $data['institute'] = $institute;
        return view('classes.view', $data);
    }
    public function create($id)
    {
        // $id = Hashids::decode($id);
        $user_id = Auth::user()->id;
        $institute = Institute::where(['id'=>$id,'user_id'=>$user_id])->firstOrFail();
        $data['institute'] = $institute;
        return view('classes.create', $data);
    }

    public function store($id, Request $request)
    {

        // $id = Hashids::decode($id);
        $user_id = Auth::user()->id;
        $institute = Institute::where(['id'=>$id,'user_id'=>$user_id])->firstOrFail();
        // $request->avatar = basename($request->avatar);
        // return $request->avatar;
        $request->validate([
            'class_name'=>'required|max:255',
            'avatar'=>'required|in:class1.png,class2.png,class3.png,class4.png,class5.png,class6.png,class7.png,class8.png,class9.png,class10.png,class11.png,class11.png,class12.png',
            'grade'=>'required|in:Pre-School,Kindergarten,1st Grade,2nd Grade,3rd Grade,4th Grade,5th Grade,6th Grade,7th Grade,8th Grade,9th Grade,10th Grade,11th Grade,12th Grade,Other,First Year,Second Year,Third Year,Fourth Year,Fifth Year',
            ]);
        $avatar_img = $request->avatar;
        $class = ClassRoom::create([
            'class_name'=>$request->class_name,
            'avatar'=>$avatar_img,
            'institute_id'=>$institute->id,
            'user_id'=>$user_id
        ]);
        // add in Teachers table
        $teacher  = Teacher::create(['class_id'=>$class->id,'institute_id'=>$institute->id,'permissions'=>'All','user_id'=>$user_id]);

        return redirect()->route('class.students', ['id' => Hashids::encode($class->id)]);
    }


    public function addStudents($id)
    {
        return view('classes.students_add');
    }
    /**
     * Add Students to classroom
     *
     * @param send
     * @return void
     */
    public function importStudents($id, Request $request)
    {
        $validation = Validator::make($request->all(), [
            'fname.*'=>'required|string|max:255',
            'lname.*'=>'required|string|max:255',
            'email.*' => 'required|string|email|max:255',
            'avatar.*'=>'required|in:cute1.png,cute2.png,cute3.png,cute4.png,cute5.png,cute6.png,cute7.png,cute8.png,cute9.png,cute10.png,cute11.png,cute11.png,cute12.png',
        ]);
        // print_r($request->all());
        if ($validation->passes()) {
            $user_id = Auth::user()->id;
            $institute = ClassRoom::where(['id'=>$id,'user_id'=>$user_id])->firstOrFail();
            foreach ($request->input('fname') as $key => $name) {
                $first_name = $request->input('fname')[$key];
                $last_name = $request->input('lname')[$key];
                $roll_no = $request->input('rollno')[$key];
                $email = $request->input('email')[$key];
                $avatar = $request->input('avatar')[$key];
                $mobileno = $request->input('mobile')[$key];

                if (User::where('email', $email)->count() > 0) {
                    $user = User::where('email', $email)->first();
                } else {
                    $user = User::create(['first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'role'=>'Student']);
                }
                if (Student::where(['class_id'=>$id,'user_id'=>$user->id])->count()===0) {
                    $data_set[] = ['user_id'=>$user->id, 'class_id'=>$id,'avatar'=>$avatar,'mobileno'=>$mobileno,'roll_no'=>$roll_no,'institute_id'=>$institute->institute_id];
                }
            }
            if (!empty($data_set)) {
                $Myclassroom = Student::insert($data_set);
                return response()->json(['status'=>'success','msg'=>'Students has been added']);
            } else {
                return response()->json(['status'=>'failed','msg'=>'failed']);
            }
        }
        return response()->json(['status'=>'failed']);
    }

    public function ShowInviteStudents($class_id)
    {
        $user_id = Auth::user()->id;
        $classroom = ClassRoom::where(['id'=>$class_id,'user_id'=>$user_id])->firstOrFail();
        $data['classroom'] = $classroom;
        return view('classes.invites', $data);
    }

    public function downloadInvites($class_id, Request $request)
    {
        return response()->json(['status'=>'Success']);
    }

    public function showgroup($id)
    {
      $user_id = Auth::user()->id;
      $classroom = ClassRoom::where(['user_id'=>$user_id,'id'=>$id])->firstOrFail();

      return view('classes.groups',compact('classroom'));
    }

    public function addPointsClass($classid,Request $request)
    {
      $skill_id = Hashids::decode($request->skill_id)[0];
      $Skill = \App\Skill::where('id',$skill_id)->firstOrFail();
      $classRoom = ClassRoom::where('');
    }
}
