@extends('layouts.master')
@section('content') 
@foreach ($timetables as $timetable)

<div class="card card-primary card-outline">
        <div class="card-header">
                <h5 class="m-0">Lecutures</h5>
        </div>
        <div class="card-body">
          <h6 class="card-title">{{$timetable->description}}</h6>
          <label for="stage">Stage {{$timetable->stage}}</label> <br>

           <a href="{{URL::asset('uploads/timetables')}}{{'/'.$timetable->attachment}}" download="newfilename" class="btn btn-primary">Download the attachment</a>
        </div>
    </div>
    @endforeach

  @endsection