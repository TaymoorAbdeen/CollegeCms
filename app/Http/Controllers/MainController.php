<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\idReg;
use App\Student;
use Illuminate\Support\Facades\Hash;
use App\Teacher;
use App\Admin;
use App\Lecture;

class MainController extends Controller
{
    //
    public function index(){
        
        return view('auth.login');
    }

    public function logout(){
        session()->forget('user');
        session()->flush();
        return redirect('/');
    }
    public function mainPage(){
        return view('layouts.master');
    }
    public function check(Request $request){
        // check if already a user
     if($request->has(['email','password'])){
       
        // check if email exists in the student table 
        if($user = Student::where('email', '=', $request->email)->first()){
            if( Hash::check($request->password, $user->password)){
                session()->put('user','student');
                session()->put('user_name',$user->name);
                session()->put('user_id',$user->id);
                session()->put('department_id',$user->department_id);
                session()->put('stage',$user->stage);
                session()->put('college_id',$user->college_id);



                 return view('layouts.master',compact('user'));

            }
  
        }
        // if the email exists in the teachers table 
       else if($user = Teacher::where('email', '=', $request->email)->first()){
            if( Hash::check($request->password, $user->password)){
                session()->put('user','teacher');
                session()->put('user_id',$user->id);
                session()->put('user_name',$user->name);

                return view('layouts.master',compact('user'));
            }
         }

            // if the email exists in the admins table 
           else if($user = Admin::where('email', '=', $request->email)->first()){
                if( Hash::check($request->password, $user->password)){
                    session()->put('user','admin');
                    session()->put('user_id',$user->id);
                    session()->put('user_name',$user->name);

                    return view('layouts.master',compact('user'));
                }
             }
         else dd('wrong email or password');
     

     }


     // check if new user 
     else if($request->has('id')){
         // checking if the id exists in the table
      if(idReg::where('id_given','=',request('id'))->exists()){
          
        $type = idReg::select('id_type','used','college_id','department_id')->where('id_given','=',request('id'))->first();
        // if id is teacher and the id hasn't been used before  update used = 1

        if($type['id_type']==1 && $type['used']==0){
          //  idReg::select('id_type','used')->where('id_given','=',request('id'))->update(['used'=>1]);
            session()->put('college_id', $type['college_id']);
            session()->put('department_id',$type['department_id']);
            // selecting only the lectures that are not being teached
            $lectures = Lecture::select('name')->where('college_id','=',(int) $type['college_id'])
                       ->where('department_id','=',(int) $type['department_id'])->whereNull('teacher_id')->get();

             session()->put('lectures',$lectures);  
             return redirect('/regtch');

  

        }
        // checking id id is student
       else if($type['id_type']==2 && $type['used']==0){
           
        //idReg::select('id_type','used')->where('id_given','=',request('id'))->update(['used'=>1]);
         
           session()->put('college_id', $type['college_id']);
           session()->put('department_id',$type['department_id']);
           
            return redirect('/regst');

        }
        //checking id is admin
       else if($type['id_type']==0 && $type['used']==0){
                 
      //  idReg::select('id_type','used')->where('id_given','=',request('id'))->update(['used'=>1]); 
        session()->put('college_id', $type['college_id']);
        session()->put('department_id',$type['department_id']);
        
         return redirect('/regad');


        }
        else dd('the id has been used');

 
       }
       // if the request has no parameter
      else dd("you da fool");


     }


    }
}
