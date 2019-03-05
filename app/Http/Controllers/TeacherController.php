<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Lecture;
use App\Subject;
use App\Absence;
use App\Student;
use App\Timetable;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    //
    public function register(){
        return view ('teacher.register');

    }
    
 

     
    


      /*
         selecting the teaecher that was just created 
         assigning the lectures in the lectures table to that teacher 
      */
      
    private function updateLectureId(){

       if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
        return redirect('/main');

        else if(empty(session()->get('user')))
        return redirect('/');
 
        $teacher =Teacher::latest()->first();
        $arr = $teacher->teaches;
        
        // splitting the string by blank spaces 
        $arr = explode(",", $arr);
        $id = $teacher->id;

      for($i = 0;$i <count($arr);$i++){
        Lecture::select('teacher_id')
        ->where('name','=',$arr[$i])->update(['teacher_id'=>$id]);
       }
       
        return;

    }
    public function store(Request $request){
          $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password'=>'required|confirmed',
            'gender'=>'required',
            'bio'=>'required',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'birthdate' => 'required|date',
            'graduated_at' => 'required',
            'teaches' => 'required'

           ]);
           
  
              $profile_picture;
              $image = $request->file('profile_picture');
              $name = time().'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('/uploads/images/profile_pictures');
              $imagePath = $destinationPath. "/".  $name;
              $image->move($destinationPath, $name);
              $profile_picture = $name;

  
              Teacher::create([
                  'name' => $request->name,
                  'password' =>bcrypt($request->password),
                  'email'=> $request->email,
                  'gender'=>$request->gender,
                  'college_id' =>session()->get('college_id'),
                  'department_id'=>session()->get('department_id'),
                  'birthdate' =>$request->birthdate,
                  'teaches' =>$request->teaches,
                  'profile_picture' =>$profile_picture,
                  'bio'=> $request->bio,
                  'graduated_at' =>$request->graduated_at,
                   ]);


         session()->put('user','teacher');
         $teacher =Teacher::latest()->first();
         session()->put('user_id',$teacher->id);
         session()->put('profile_picture',$teacher->profile_picture);
         session()->put('user_name',$teacher->name);
         $this->updateLectureId();
         return redirect('/main');
             
    }

    /* 
    displaing all the lectures that the belongs to the teacher 
    making him select one in the view 

    */
   public function selectLecture(){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');

       $lectures = Lecture::select('name','id')->where('teacher_id','=',session()->get('user_id'))->get();
       $url = '/create-lecture';
       return view('teacher.select-lecture',compact(['lectures','url']));


   }
   /*   
       selecting the id of the lecture to later 
       insert it into the subject table  

   */
   public function createLecture(Request $request){
 
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
    $lectures = Lecture::select('name','id')->where('teacher_id','=',session()->get('user_id'))->get();
    return view('teacher.create-lecture',compact('lectures'));
   }

   public function storeLecture(Request $request){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
 
          $this->validate($request,[

        'name' => 'required',
        'description' =>'required',
        'attachment' => 'required|mimes:jpeg,png,jpg,pdf,docs,doc,xls,xlsx',
        
        
        ]);

        // store the file in the uploads folder 
        $file;
        $inputFile = $request->file('attachment');
        $name = time().'.'.$inputFile->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/lectures');
        $filePath = $destinationPath. "/".  $name;
        $inputFile->move($destinationPath, $name);
        $file = $name;
      
          Subject::create([

              'name'=> $request->name,
              'description' =>$request->description,
              'attachment'=> $file,
              'lecture_id' =>$request->lecture_id,
              
         ]);
         $messageCreatingLecture = "Post was created successflly!";
          return view('layouts.master',compact('messageCreatingLecture'));

   }
   public function selectLectureUpDel(){
 
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
    //
    $lectures = Lecture::select('name','id')->where('teacher_id','=',session()->get('user_id'))->get();
    $url = '/lectures/all';
     return view('teacher.select-lecture',compact(['lectures','url']));

       
   }

   /* 
   selecting the lectures belonging to the teacher 
   then comparing 
   */
  
   public function showLecture(Request $request){
 
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
      
    $subjects = Subject::where('lecture_id','=',$request->lecture_id)
               ->orderBy('created_at','desc')->get();

    return view('teacher.show-lectures',compact('subjects'));    
   }


   public function updateLecture($id){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
       
      $subject = Subject::findOrFail($id);
      $subject->description = request('description');

      $subject->name = request('name');
       $subject->save();
       $messageLectureUpdate = "Lecture was updated successfully!";
       return view('layouts.master',compact('messageLectureUpdate'));
 
   }


   public function deleteLecture($id){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');

    $subject = Subject::findOrFail($id);
     $subject->delete();
     $messageLectureDelete = "Lecture was deleted successfully!";
     return view('layouts.master',compact('messageLectureDelete'));

   }
   public function selectLectureAbsence(){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');

    $lectures = Lecture::select('name','id')->where('teacher_id','=',session()->get('user_id'))->get();
    $url = '/edit-absence';
     return view('teacher.select-lecture',compact(['lectures','url']));

 
   }

   public function editAbsence(){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
     
    $lecture = Lecture::find(request('lecture_id'));
    
     // checking if the abscense table was created before
     $absences = Absence::where('lecture_id','=',$lecture->id)->get();
     $teacher_id = $lecture->teacher_id;
     $lecture_id = $lecture->id;
     session()->put('lecture_id',$lecture_id);

     
       if(count($absences)){
          $students = Student::select('name','id')
         ->where('department_id','=',$lecture->department_id)
         ->where('college_id','=',$lecture->college_id)
         ->where('stage','=',$lecture->stage) 
         ->get();

      return view('teacher.edit-absence-table',compact(['students','absences','teacher_id','lecture_id']));

      } 

      $students = Student::select('name','id')
      ->where('department_id','=',$lecture->department_id)
      ->where('college_id','=',$lecture->college_id)
      ->where('stage','=',$lecture->stage) 
      ->get();
     
      return view('teacher.edit-absence-table',compact(['students','teacher_id','lecture_id']));
     
    }
   public function storeAbsence(){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
    $absences = request()->all();
         
    for($i = 0;$i<count($absences);$i++)
        for($j = 0;$j<count($absences['student_id']);$j++) {
           $matchThese = array('student_id'=>$absences['student_id'][$j]);
           Absence::updateOrCreate($matchThese,[
               'student_id'=>$absences['student_id'][$j],
               'teacher_id'=>session()->get('user_id'),
               'lecture_id'=>session()->get('lecture_id'),
               'first_lecture'=>$absences['first_lecture'][$j],
               'second_lecture'=>$absences['second_lecture'][$j],
               'third_lecture'=>$absences['third_lecture'][$j],
               'fourth_lecture'=>$absences['fourth_lecture'][$j],
               'fifth_lecture'=>$absences['fifth_lecture'][$j],
               'sixth_lecture'=>$absences['sixth_lecture'][$j],
               'seventh_lecture'=>$absences['seventh_lecture'][$j],
               'eighth_lecture'=>$absences['eighth_lecture'][$j],
               'ninth_lecture'=>$absences['ninth_lecture'][$j],
               'tenth_lecture'=>$absences['tenth_lecture'][$j],

           ]);
        }

    session()->forget('lecture_id');
    $messageAbsence = "absence was updated successfully";
return view('layouts.master',compact('messageAbsence'));


   }

   public function showTimetable(){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
 
        $teacher = Teacher::find(session()->get('user_id'));

       $timetables = Timetable::where('college_id','=',$teacher->college_id)
                                ->where('department_id','=',$teacher->department_id)->get();
 
       return view('teacher.show-timetables',compact('timetables'));                          



   }

   public function showInfo(){
    if(!empty(session()->get('user'))&&session()->get('user')!=='teacher')
    return redirect('/main');

    else if(empty(session()->get('user')))
    return redirect('/');
 
     
    $teacher = Teacher::find(session()->get('user_id'));
     $college =   DB::table('colleges')->find($teacher->college_id);
    $teaches = str_replace(" ",",",$teacher->teaches);

    $department =   DB::table('departments')->where('college_id','=',$teacher->college_id)->first();
    return view('teacher.view-profile',compact(['teacher','college','department','teaches']));


     
   }

}
