<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Lecture;
use App\Student;
use App\Teacher;
use App\Mark;
use App\Timetable;
use App\idReg;
use Illuminate\Support\Facades\DB;
use App\Subject;

class AdminController extends Controller
{
    //
    public function register(){
        return view ('admin.register');

    }
    public function store(Request $request){
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password'=>'required|confirmed',
             'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
 
           ]);
  
          $profile_picture;
              $image = $request->file('profile_picture');
              $name = time().'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('/uploads/images/profile_pictures');
              $imagePath = $destinationPath. "/".  $name;
              $image->move($destinationPath, $name);
              $profile_picture = $name;
  
              Admin::create([
                  'name' => $request->name,
                  'password' =>bcrypt($request->password),
                  'email'=> $request->email,
                   'college_id' =>session()->get('college_id'),
                  'department_id'=>session()->get('department_id'),
                   'profile_picture' =>$profile_picture,
                    ]);
         session()->put('user','admin');
         $admin =Admin::latest()->first();
         session()->put('user_id',$admin->id);
         session()->put('profile_picture',$admin->profile_picture);
         session()->put('user_name',$admin->name);

         return redirect('/main');      
    }

    /* 
       select all the lectures that the admin 
       can post marks to it meaning the lectures 
       with the department and college of admin
    */

    public function editMarksSelectLecture(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
     
     $adminDepAndCollege = Admin::select('college_id','department_id')->
                           where('id','=',session()->get('user_id'))->first();

     $lectures = Lecture::select('name','stage','teacher_id','id')
                ->where('department_id','=',$adminDepAndCollege->department_id)
                ->where('college_id','=',$adminDepAndCollege->college_id)->get();
     $url = '/edit-marks-view';        
    return view('admin.select-lecture',compact(['lectures','url']));                                  

    
    }
    /*
    The request holds the lecture id and teacher id and the stage 
    based on that select all the students with the same stage and department and 
    
    */
    public function editMarksView(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
       
        $lecture = Lecture::find(request('lecture_id'));
        $lecture_id = $lecture->id;
        $teacher_id = $lecture->teacher_id;
        
        session()->put('lecture_id',$lecture_id);
        session()->put('teacher_id',$teacher_id);
        

        // checking if the marks table was created before
        $marks = Mark::where('lecture_id','=',$lecture->id)->get();
        if(count($marks)){
            
            $students = Student::select('name','id')
            ->where('department_id','=',$lecture->department_id)
            ->where('college_id','=',$lecture->college_id)
            ->where('stage','=',$lecture->stage) 
            ->get();

         return view('admin.edit-marks',compact(['students','marks','teacher_id','lecture_id']));

         } 


        // if the table is not created yet 

       
        $students = Student::select('name','id')
                  ->where('department_id','=',$lecture->department_id)
                  ->where('college_id','=',$lecture->college_id)
                  ->where('stage','=',$lecture->stage) 
                  ->get();
                 
      return view('admin.edit-marks',compact(['students','teacher_id','lecture_id']));

     }

     public function storeMarks(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');

         $marks = request()->all(); 
         for($i = 0;$i<count($marks);$i++)
             for($j = 0;$j<count($marks['student_id']);$j++) {
                $matchThese = array('student_id'=>$marks['student_id'][$j]);
                Mark::updateOrCreate($matchThese,[
                    'student_id'=>$marks['student_id'][$j],
                    'teacher_id'=>session()->get('teacher_id'),
                    'lecture_id'=>session()->get('lecture_id'),
                    'before_midterm'=>$marks['before_midterm'][$j],
                    'midterm'=> $marks['midterm'][$j],
                    'before_final'=>$marks['before_final'][$j],
                    'final'=>$marks['final'][$j],
                    'midterm_second_attempt'=>$marks['midterm_second_attempt'][$j],
                    'final_second_attempt'=>$marks['final_second_attempt'][$j]
                ]);
             }

             session()->forget('lecture_id');
             session()->forget('teacher_id');
     
    $messageMarks = "Marks was updated successfully!";     
    return view('layouts.master',compact('messageMarks'));
 

     }
     public function createTimetable(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
      return view('admin.create-timetable');

     }
     public function storeTimetable(Request $request){

      $this->validate($request,[
          'description' => 'required',
          'attachment' => 'required|mimes:jpeg,png,jpg,pdf,docs,doc,xls,xlsx',
          'stage' => 'required'
          ]);

          $file;
          $inputFile = $request->file('attachment');
          $name = time().'.'.$inputFile->getClientOriginalExtension();
          $destinationPath = public_path('/uploads/timetables');
          $filePath = $destinationPath. "/".  $name;
          $inputFile->move($destinationPath, $name);
          $file = $name;


          $admin = Admin::select('department_id','college_id')->
                   where('id','=',session()->get('user_id'))->first();

         Timetable::create([
             'description' =>$request->description,
             'attachment'=>$file,
             'stage' =>$request->stage,
             'college_id'=>$admin->college_id,
             'department_id'=>$admin->department_id
         ]);
         $messageCreateTimetable = "Timetable was created successfully!";
         return view('layouts.master',compact('messageCreateTimetable'));



         return redirvieect('/main');

     }

      public function showTimetable(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');

        $admin = Admin::select('department_id','college_id')->
                   where('id','=',session()->get('user_id'))->first();

        $timetables = Timetable::where('college_id','=',$admin->college_id)->
                                 where('department_id','=',$admin->department_id)
                                ->orderBy('created_at','desc')->get();

                                return view('admin.update-timetables',compact('timetables'));                       
                        
                                
        dd($timetables);                         


      }
      public function updateTimetable($id){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
          $timetable = Timetable::findOrFail($id);
          $timetable->description = request('description');
          $timetable->stage = request('stage');
          $timetable->save();
          $messageUpdateTimetable = "Timetable was updated successfully!";
  

          return view('layouts.master',compact('messageUpdateTimetable'));

 
      }
      public function deleteTimetable($id){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
        $timetable = Timetable::findOrFail($id);
        $timetable->delete();

        $messageDeleteTimetable = "Timetable was deleted successfully!";
        return view('layouts.master',compact('messageDeleteTimetable')); 
         }
      public function selectIdType(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
      return view('admin.select-id-type');

      }

      public function storeId(){
       
        if(request()->has('type')){
            $num = mt_rand(10000000, 99999999);
            $admin = Admin::select('department_id','college_id')->
            where('id','=',session()->get('user_id'))->first();
 
            if(request('type') == 'teacher'){
                idReg::create([
                 'id_type' =>'1',
                 'id_given' =>$num,
                 'used' =>'0',
                 'college_id' =>$admin->college_id,
                 'department_id'=>$admin->department_id
                ]);
                 return view ('admin.show-id',compact('num'));

            }
            else {
                idReg::create([
                    'id_type' =>'2',
                    'id_given' =>$num,
                    'used' =>'0',
                     'college_id' =>$admin->college_id,
                     'department_id'=>$admin->department_id
                    ]);
                    return view ('admin.show-id',compact('num'));
            }
 
        }

      }

      public function createSubject(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');

        return view('admin.create-subject');
      }

      public function storeSubject(){
        $this->validate(request(),[
           'name' => 'required',
           'stage' => 'required'
          ]);

          $admin = Admin::select('department_id','college_id')->
          where('id','=',session()->get('user_id'))->first();
          Lecture::create([
            'name' => request('name'),
             'stage' =>request('stage'),
             'college_id'=>$admin->college_id,
             'department_id'=>$admin->department_id,

          ]);
         $messageSubject= "created subject successfully";
         return view('layouts.master',compact('messageSubject'));
      }




      public function showInfo(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
          $admin = Admin::find(session()->get('user_id'));
          $college =   DB::table('colleges')->find($admin->college_id);
          $department =   DB::table('departments')->where('college_id','=',$admin->college_id)->first();
            return view('admin.view-profile',compact(['admin','college','department']));


      }
      public function dashboard(){
        if(!empty(session()->get('user'))&&session()->get('user')!=='admin')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
        $admin = Admin::find(session()->get('user_id'));        
        $admins = Admin::where('college_id','=',$admin->college_id)->
                         where('department_id','=',$admin->department_id)->get();
        $students = Student::where('college_id','=',$admin->college_id)->
                             where('department_id','=',$admin->department_id)->get();
         $teachers = Teacher::where('college_id','=',$admin->college_id)->
                             where('department_id','=',$admin->department_id)->get();    
        $lectures = Lecture::where('college_id','=',$admin->college_id)->
                     where('department_id','=',$admin->department_id)->get();       


         $numOfAdmins = count($admins);
         $numOfLectures = count($lectures);
         $numOfStudents = count($students);
         $numOfTeachers = count($teachers);

        


        return view('admin.dashboard',compact(['numOfAdmins','numOfLectures','numOfTeachers','numOfStudents']));
      }


}
