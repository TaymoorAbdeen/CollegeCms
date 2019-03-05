@extends('layouts.master')
@section('content') 
<div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Select2</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="/id/number" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select Id for teacher or student</label>
                            <select class="form-control select2 select2-hidden-accessible" name="type" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option selected="selected" value="teacher">Teacher</option>
                                <option value="student">student</option>
                                
                            </div>
                        </select>
<br>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary ">Select</button></div></div><div class="col-sm-12 col-md-7">

                            </div>
                            
                        </form>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
        
      </div>
      @endsection