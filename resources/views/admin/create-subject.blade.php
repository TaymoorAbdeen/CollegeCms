@extends('layouts.master')
@section('content') 
<div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Subject Creation</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/store/subject" method="POST"  >
            {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group">
              <label for="title">Subject Name</label>
              <input type="text" name="name" class="form-control"   >
            </div>
      
           
                  <div class="form-group">
                        <label for="lectures">For Stage</label>
                        <select class="form-control select2 select2-hidden-accessible" name="stage" style="width: 100%;" tabindex="-1" aria-hidden="true">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                      </div>
                  
            </div>
            <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
          </div>
      
        
          <!-- /.card-body -->

        
        </form>
      </div>    

 @endsection