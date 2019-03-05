@extends('layouts.master')
@section('content') 
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$numOfTeachers}}</h3>

          <p>Num of lecturers</p>
        </div>
        <div class="icon">
          <i class="fa fa-chalkboard-teacher"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$numOfLectures}}</h3>

          <p>num of lectures </p>
        </div>
        <div class="icon">
          <i class="fa fa-book-open"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$numOfStudents}}</h3>

          <p>num of students</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$numOfAdmins}}</h3>

          <p>num of admins</p>
        </div>
        <div class="icon">
          <i class="fa fa-user-tie"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  @endsection