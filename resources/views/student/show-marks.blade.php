@extends('layouts.master') 
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Your Marks </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                @if(!empty($marks->before_midterm))
                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                    rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Before Midterm</th> @endif @if(!empty($marks->midterm))
                                <th class="sorting" tabindex="0"
                                    aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Midterm</th>
                                @endif @if(!empty($marks->before_final))
                                <th class="sorting" tabindex="0" aria-controls="example2"
                                    rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Before Final</th>
                                </th> @endif @if(!empty($marks->final))
                                <th class="sorting" tabindex="0" aria-controls="example2"
                                    rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Final</th>
                                @endif @if(!empty($marks->midterm_second_attempt))
                                <th class="sorting" tabindex="0" aria-controls="example2"
                                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Midterm second attempt</th>
                            </tr>
                            @endif @if(!empty($marks->final_second_attempt))
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Final second attempt</th>
                            </tr>
                            @endif


                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                    @if(!empty($marks->before_midterm))  <td>{{$marks->before_midterm}}</td> @endif
                                    @if(!empty($marks->midterm))  <td>{{$marks->midterm}}</td> @endif
                                    @if(!empty($marks->before_final))  <td>{{$marks->before_final}}</td> @endif
                                    @if(!empty($marks->final))  <td>{{$marks->final}}</td> @endif
                                    @if(!empty($marks->midterm_second_attempt))  <td>{{$marks->midterm_second_attempt}}</td> @endif
                                    @if(!empty($marks->final_second_attempt))  <td>{{$marks->final_second_attempt}}</td> @endif
                            </tr>
                           
                        </tbody>
@endsection