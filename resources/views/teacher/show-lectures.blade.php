@extends('layouts.master') 
@section('content') @foreach ($subjects as $subject)

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Lecture post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form role="form" action="/update-lecture/{{$subject->id}}" method="POST" enctype="multipart/form-data">
        {{method_field('PATCH')}}

        {{ csrf_field() }}
        <div class="card-body">

            <div class="form-group">
                <label for="title">Title of lecture</label>
                <input type="text" name="name" class="form-control" value="{{$subject->name}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="3" name="description" class="form-control">{{$subject->description}}  </textarea>
            </div>

            <div class="form-group">
                <label for="attachment"> old attachment</label>
                <a href="{{URL::asset('uploads/lectures')}}{{'/'.$subject->attachment}}" download="newfilename">Download the pdf</a>
            </div>

 


<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>


</div>
<a href="/delete-lecture/{{$subject->id}}"><button class="btn btn-danger">Delete</button></a>

@endforeach
@endsection