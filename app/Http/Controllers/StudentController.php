<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Lecture;
use App\Subject;
use App\Mark;
use App\Absence;
use App\Timetable;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
   

   /*
    Stores the registeration data in the student table 
      
   */
    public function store(Request $request){
            $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'password'=>'required|confirmed',
          'gender'=>'required',
          'bio'=>'required',
          'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'stage' => 'required',
          'birthdate' => 'required|date'
         ]);

            $profile_picture;
            $image = $request->file('profile_picture');
            $name =time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/images/profile_pictures');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $profile_picture = $name;

            Student::create([
                'name' => $request->name,
                'password' =>bcrypt($request->password),
                'email'=> $request->email,
                'gender'=>$request->gender,
                'college_id' =>session()->get('college_id'),
                'department_id'=>session()->get('department_id'),
                'birthdate' =>$request->birthdate,
                'profile_picture' =>$profile_picture,
                'bio'=> $request->bio,
                'stage'=>$request->stage
                ]);

       session()->put('user','student');
       $student =Student::latest()->first();
       session()->put('user_id',$student->id);
       session()->put('department_id',$student->department_id);
       session()->put('stage',$student->stage);
       session()->put('profile_picture',$student->profile_picture);
       session()->put('college_id',$student->college_id);
       session()->put('user_name',$student->name);

       return redirect('/main');
 
    }
    public function selectLectureMarks(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='student')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
        $lectures = Lecture::select('name','id')
        ->where('college_id','=',session()->get('college_id'))
        ->where('department_id','=',session()->get('department_id'))
        ->where('stage','=',session()->get('stage'))->get();
        
         $url = '/show-lecture-marks';
         return view('student.select-lecture',compact(['lectures','url']));
   

    }
    /*
       shows the lectures for marks, it could 
       be optimized with the other show lectures to make 
       because they all do the same task
       */
    public function showLectureMarks(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='student')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');

        $marks = Mark::where('student_id','=',session()->get('user_id'))->
                       where('student_id','=',request('lecture_id'))->
                               first();
        return view('student.show-marks',compact('marks'));
    }


    /*
       showing the student all the lectures he is enrolled in 
       and making him select one  
    */

    public function selectLecture(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='student')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');

        $lectures = Lecture::select('name','id')
        ->where('college_id','=',session()->get('college_id'))
        ->where('department_id','=',session()->get('department_id'))
        ->where('stage','=',session()->get('stage'))->get();
        
        $url = '/show-lecture-st';
         return view('student.select-lecture',compact(['lectures','url']));
   
       }



      /*
        the request is returning the lecture id to then 
        select all the lectures with that specific id
      */

    public function showLecture(Request $request){
        if(!empty(session()->get('user'))&&session()->get('user')!=='student')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');

    $subjects = Subject::where('lecture_id','=',$request->lecture_id)->orderBy('created_at','desc')->get();;
    
     return view('student.show-lecture-post',compact('subjects'));



    }

    public function showAbsenceLectureStudent(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='student')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');

        $lectures = Lecture::select('name','id')

        ->where('college_id','=',session()->get('college_id'))
        ->where('department_id','=',session()->get('department_id'))
        ->where('stage','=',session()->get('stage'))->get();
        
        $url = '/absence/lectures/show-count';
         return view('student.select-lecture',compact(['lectures','url']));

    }
  
    public function showAbsenceCount(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='student')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
      $absence = Absence::where('lecture_id','=',request('lecture_id'))->
                           where('student_id','=',session()->get('user_id'))->
                           first();   
 

                            
        $count = 0;
        $arr = (array) $absence;
        $took = 0;
   
       if(count($arr)){                    
           // chosing else if instead of else 
           // because it can be null 

       if($absence->first_lecture===0) $count++;
       else if ($absence->first_lecture===1) $took++;

       if($absence->second_lecture===0) $count++;
       else if ($absence->second_lecture===1) $took++;
       
       if($absence->third_lecture===0) $count++;
       else if ($absence->third_lecture===1) $took++;

       if($absence->fourth_lecture===0) $count++;
       else if ($absence->fourth_lecture===1) $took++;

       if($absence->fifth_lecture===0) $count++;
       else if ($absence->fifth_lecture===1) $took++;

       if($absence->sixth_lecture===0) $count++;
       else if ($absence->sixth_lecture===1) $took++;

       if($absence->seventh_lecture===0) $count++;
       else if ($absence->seventh_lecture===1) $took++;

       if($absence->eighth_lecture===0) $count++;
       else if ($absence->eighth_lecture===1) $took++;

       if($absence->ninth_lecture===0) $count++;
       else if ($absence->ninth_lecture===1) $took++;

       if($absence->tenth_lecture===0) $count++;
       else if ($absence->tenth_lecture===1) $took++;


       }
        return view('student.show-absence',compact(['count','took']));
     

     }
    public function showTimetable(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='student')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
        $student = Student::find(session()->get('user_id'));
         $timetable = Timetable::where('college_id','=',$student->college_id)
                     ->where('department_id','=',$student->department_id)
                     ->where('stage','=',$student->stage)->first();
         if(empty($timetable)) {
             $note = "There are no timetables yet";
             return view('layouts.master',compact('note'));
         }
        return view('student.show-timetable',compact('timetable'));


    }
    public function showInfo(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='student')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
        $student = Student::find(session()->get('user_id'));
        $lectures = Lecture::where('department_id','=',$student->department_id)
                    ->where('college_id','=',$student->college_id)
                    ->where('stage','=',$student->stage)->get();

         $college =   DB::table('colleges')->find($student->college_id);
    
         $department =   DB::table('departments')->where('college_id','=',$student->college_id)->first();
 
        return view('student.view-profile',compact(['student','lectures','college','department']));

    }
    
    public function register()
    {

        return view ('student.register');
    }
}
