@extends('layouts.master')
@section('content') 
<div class="card card-primary">
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-ban"></i> Alert!</h5>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
   
@endif
        <div class="card-header">
        
          <h3 class="card-title">Lecture post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/lectures" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title of lecture</label>
              <input type="text" name="name" class="form-control"   >
            </div>
            <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="3" name="description" class="form-control"  >  </textarea>
                  </div>
           
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
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
                  <label for="lectures">select the lecture</label>
                  <select class="form-control select2 select2-hidden-accessible" name="lecture_id" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    @foreach ($lectures as $lecture)
                    <option value="{{$lecture->id}}">{{$lecture->name}}</option>
                    @endforeach
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