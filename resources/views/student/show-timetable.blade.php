@extends('layouts.master')
@section('content') 
<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
                <div class="card card-primary card-outline">
                        <div class="card-header">
                                <h5 class="m-0">Timetable</h5>
                       
                        </div>
                        <div class="card-body">
                          <h6 class="card-title">{{$timetable->description}}</h6>
                
                           <a href="{{URL::asset('uploads/timetables')}}{{'/'.$timetable->attachment}}" download="newfilename">Download Timetable</a>
                        <br>   <label> Posted {{$timetable->created_at->diffForHumans() }}</label>

                        </div>
                    </div>
            </div>
      
          </div>
        </div>
 @endsection