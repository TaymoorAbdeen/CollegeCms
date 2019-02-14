@extends('layouts.master')
@section('content')
<div class="card card-primary">
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
            </div>
           
          </div>
      
        
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>    

@endsection