@extends('layouts.master')
@section('content')

<div class="card">
        <div class="card-header">
          <h3 class="card-title">Hover Data Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <form action="/store-absence" method="post">
                    {{ csrf_field() }}
            <thead>
            <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Name</th>

        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">First Lecture</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Second Lecture</th>f
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Third Lecture</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Fourth Lecture</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Fifth Lecture</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Sixth Lecture</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Seventh Lecture</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Eighth Lecture</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Ninth Lecture</th>
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="sixth Lecture: activate to sort column descending">Tenth Lecture</th>
 
               </thead>
            <tbody>
    
                     @if (!empty($absences))
                    @for($i = 0;$i<count($students);$i++)
                    <tr role="row" >
                        <input type="hidden" name="student_id[]" id="" value="{{$students[$i]['id']}}" >          
                        
                    
           
            
                        <td colspan="1"> {{$students[$i]['name']}} </td> 
           
                       
                        <td ><input size="5" style="border:none" type="text" name="second_lecture[]" id="" value="{{$absences[$i]['second_lecture']}}" placeholder="{{$absences[$i]['second_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="third_lecture[]" id="" value="{{$absences[$i]['third_lecture']}}" placeholder="{{$absences[$i]['third_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="fourth_lecture[]" id="" value="{{$absences[$i]['fourth_lecture']}}" placeholder="{{$absences[$i]['fourth_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="first_lecture[]" id="" value="{{$absences[$i]['first_lecture']}}" placeholder="{{$absences[$i]['first_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="fifth_lecture[]" id="" value="{{$absences[$i]['fifth_lecture']}}" placeholder="{{$absences[$i]['fifth_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="sixth_lecture[]" id="" value="{{$absences[$i]['sixth_lecture']}}" placeholder="{{$absences[$i]['sixth_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="seventh_lecture[]" id="" value="{{$absences[$i]['seventh_lecture']}}" placeholder="{{$absences[$i]['seventh_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="eighth_lecture[]" id="" value="{{$absences[$i]['eighth_lecture']}}" placeholder="{{$absences[$i]['eighth_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="ninth_lecture[]" id="" value="{{$absences[$i]['ninth_lecture']}}" placeholder="{{$absences[$i]['ninth_lecture']}}"></td> 
                        <td colspan="1"><input style="border:none" size="5" type="text" name="tenth_lecture[]" id="" value="{{$absences[$i]['tenth_lecture']}}" placeholder="{{$absences[$i]['tenth_lecture']}}"></td> 
                        </tr>
                        @endfor
                   
                @else    @foreach ($students as $student)
                       <tr>
                           <input   type="hidden" name="student_id[]" id="" value="{{$student->id}}" >          
                        
                           <td  colspan=> {{$student->name}} </td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="first_lecture[]" id="" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="second_lecture[]" id="" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="third_lecture[]" id="" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="fourth_lecture[]" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="fifth_lecture[]" id="" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="sixth_lecture[]" id="" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="seventh_lecture[]" id="" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="eighth_lecture[]" id="" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="ninth_lecture[]" id="" ></td> 
                           <td  colspan="1"><input style="border:none" size="5" type="text" name="tenth_lecture[]" id="" ></td> 
              
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



































{{-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hover Data Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
            </thead>
            <tbody>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <tr role="row" class="odd">
              <td class="sorting_1">Gecko</td>
              <td>Firefox 1.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.7</td>
              <td>A</td>
            </tr><tr role="row" class="even">
              <td class="sorting_1">Gecko</td>
              <td>Firefox 1.5</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Gecko</td>
              <td>Firefox 2.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr><tr role="row" class="even">
              <td class="sorting_1">Gecko</td>
              <td>Firefox 3.0</td>
              <td>Win 2k+ / OSX.3+</td>
              <td>1.9</td>
              <td>A</td>
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Gecko</td>
              <td>Camino 1.0</td>
              <td>OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr><tr role="row" class="even">
              <td class="sorting_1">Gecko</td>
              <td>Camino 1.5</td>
              <td>OSX.3+</td>
              <td>1.8</td>
              <td>A</td>
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Gecko</td>
              <td>Netscape 7.2</td>
              <td>Win 95+ / Mac OS 8.6-9.2</td>
              <td>1.7</td>
              <td>A</td>
            </tr><tr role="row" class="even">
              <td class="sorting_1">Gecko</td>
              <td>Netscape Browser 8</td>
              <td>Win 98SE+</td>
              <td>1.7</td>
              <td>A</td>
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Gecko</td>
              <td>Netscape Navigator 9</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr><tr role="row" class="even">
              <td class="sorting_1">Gecko</td>
              <td>Mozilla 1.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1</td>
              <td>A</td>
            </tr></tbody>
            <tfoot>
            <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
            </tfoot>
          </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        </div>
        <!-- /.card-body -->
      </div> --}}