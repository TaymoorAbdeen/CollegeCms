@extends('layouts.master')
@section('content')
@foreach ($subjects as $subject)

<div class="card card-primary card-outline">
        <div class="card-header">
                <h5 class="m-0">Lecutures</h5>
 
        
    
       
        </div>
        <div class="card-body">
          <h6 class="card-title">{{$subject->name}}</h6>

          <p class="card-text">{{$subject->description}}</p>
          <a href="{{URL::asset('uploads/lectures')}}{{'/'.$subject->attachment}}" download="newfilename" class="btn btn-primary">Download the attachment</a>
          <br> <br>
          <label> Posted {{$subject->created_at->diffForHumans() }}</label>

        </div>
    </div>
    
    @endforeach

@endsection
 