@extends('layouts.master')
@section('content')  
<div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Lecture post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/lectures/timetable" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group">
              <label for="title">Timetable description </label>
              <input type="text" name="description" class="form-control"   >
            </div>
          
           
            <div class="form-group">
              <label for="exampleInputFile">Timetable attachment</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="attachment" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>

                <div class="form-group">
                  <label for="lectures">select the Stage</label>
                  <select class="form-control select2 select2-hidden-accessible" name="stage" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                  </select>
                </div>
                  
            </div>
           
          </div>
      
        
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>    
@endsection
 