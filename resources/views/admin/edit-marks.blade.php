@extends('layouts.master')
@section('content')

<div class="card">
        <div class="card-header">
          <h3 class="card-title">Hover Data Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <form action="/store-marks" method="post">
                    {{ csrf_field() }}
            <thead>
            <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Name</th>

        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Before Midterm</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Midterm</th>f
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Before Final</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Final</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Midterm Second Attempt</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Final Second Attempt</th>
     
 
               </thead>
            <tbody>
                    @if (!empty($marks))
                    @for($i = 0;$i<count($students);$i++)
                    <tr>
                        <input type="hidden" name="student_id[]" id="" value="{{$students[$i]['id']}}" >          
                           
           
            
                        <td><input size="25" style="border:none" type="text" name="student_name[]" id="" value="{{$students[$i]['name']}}" placeholder="{{$students[$i]['name']}}"></td> 
                        <td><input size="10" style="border:none" type="text" name="before_midterm[]" id="" value="{{$marks[$i]['before_midterm']}}" placeholder="{{$marks[$i]['before_midterm']}}"></td> 
                        <td><input size="10" style="border:none" type="text" name="midterm[]" id="" value="{{$marks[$i]['midterm']}}" placeholder="{{$marks[$i]['midterm']}}"></td> 
                        <td><input size="10" style="border:none" type="text" name="before_final[]" id="" value="{{$marks[$i]['before_final']}}" placeholder="{{$marks[$i]['before_final']}}"></td> 
                        <td><input size="10" style="border:none" type="text" name="final[]" id="" value="{{$marks[$i]['final']}}" placeholder="{{$marks[$i]['final']}}"></td> 
                        <td><input size="10" style="border:none" type="text" name="midterm_second_attempt[]" id="" value="{{$marks[$i]['midterm_second_attempt']}}" placeholder="{{$marks[$i]['midterm_second_attempt']}}"></td> 
                        <td><input size="10" style="border:none" type="text" name="final_second_attempt[]" id="" value="{{$marks[$i]['final_second_attempt']}}" placeholder="{{$marks[$i]['final_second_attempt']}}"></td> 
                       </tr>
                        @endfor
                   
                @else    @foreach ($students as $student)
                       <tr>
                           <input type="hidden" name="student_id[]" id="" value="{{$student->id}}" >          
                               
                          
            
                        <td>{{$student->name}} </td> 
                        <td><  input size="5" style="border:none;"  type="text" name="before_midterm[]"> </td>
                        <td >< input size="5" style="border:none;" type="text" name="midterm[]"> </td>
                        <td > <input size="5" style="border:none;" type="text" name="before_final[]"></td>
                        <td > <input size="5" style="border:none;" type="text" name="final[]"></td>
                        <td > <input size="5" style="border:none;" type="text" name="midterm_second_attempt[]"></td>
                        <td > <input size="5" style="border:none;" type="text" name="final_second_attempt[]"></td>
                       </tr>
           
                    @endforeach
                    
                    @endif
                    
         </tbody>
         <tfoot>
                {{-- <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">First Lecture</th><th rowspan="1" colspan="1">Second Lecture</th><th rowspan="1" colspan="1">Third Lecture</th><th rowspan="1" colspan="1">Fourth Lecture </th> <th rowspan="1" colspan="1">Fifth Lecture </th><th rowspan="1" colspan="1">Sixth Lecture </th><th rowspan="1" colspan="1">Seventh Lecture </th><th rowspan="1" colspan="1">Eighth Lecture </th><th rowspan="1" colspan="1">Ninth Lecture </th><th rowspan="1" colspan="1">Tenth Lecture </th></tr> --}}
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                        <button type="submit" class="btn btn-block btn-primary btn-lg">Update</button></div></div><div class="col-sm-12 col-md-7">
              </div>
            </form>
         </div>
        <!-- /.card-body -->
      </div>
     
@endsection


































 