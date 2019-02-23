@extends('layouts.master') 
@section('content')
 @foreach ($subjects as $subject)

<div class="card card-primary card-outline">
    <div class="card-tools">
        <a href="/delete-lecture/{{$subject->id}}"><button type="button" class="btn btn-tool"><i class="fa fa-trash-alt red"></i></button></a>

    </div>

    <div class="card-header">
        <h3 class="card-title">Lecture post</h3>
    </div>
 
    <div class="card-body">
        <form action="/update-lecture/{{$subject->id}}" method="POST" enctype="multipart/form-data">
            {{method_field('PATCH')}} {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="card-title">Title of lecture</label>
                <input type="text" name="name" class="form-control" value="{{$subject->name}}">
            </div>
            <div class="form-group">
                <label for="description" class="card-text" >Description</label>
                <textarea rows="3" name="description" class="form-control">{{$subject->description}}  </textarea>
            </div>

            <div class="form-group">
                <label for="attachment"> old attachment</label>
                <a href="{{URL::asset('uploads/lectures')}}{{'/'.$subject->attachment}}" download="newfilename">Download the pdf</a>
            </div>
            <label> Posted {{$subject->updated_at->diffForHumans() }}</label>

        </div>


            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>



     @endforeach
 @endsection