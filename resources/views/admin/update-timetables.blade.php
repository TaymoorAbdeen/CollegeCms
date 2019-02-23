 @foreach ($timetables as $timetable)

<div class="card card-primary card-outline">

        <div class="card-tools">
 
                <a  href="/lectures/delete/timetable/{{$timetable->id}}"><button type="button" class="btn btn-tool"><i class="fa fa-trash-alt red"></i></button></a>
        
            </div>
    <div class="card-header">
        <h3 class="card-title">Lecture post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form role="form" action="/lectures/update/timetable/{{$timetable->id}}" method="POST" enctype="multipart/form-data">
        {{method_field('PATCH')}}

        {{ csrf_field() }}
        <div class="card-body">

            <div class="form-group">
                <label for="title">Title of lecture</label>
                <input type="text" name="description" class="form-control" value="{{$timetable->description}}">
            </div>

            <div class="form-group">
                    <label for="stage">
                       old stage: {{$timetable->stage}} 
                    </label> <br>
                    <label for="stage">
                            new stage: 
                         </label> <br>

                    <select class="form-control select2 select2-hidden-accessible" name="stage" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>

                    </select>
                </div>

            <div class="form-group">
                <label for="attachment"> old attachment</label>
                <a href="{{URL::asset('uploads/lectures')}}{{'/'.$timetable->attachment}}" download="newfilename">Download the attachment</a>
            </div>
            <label> Posted {{$timetable->updated_at->diffForHumans() }}</label>


 


<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>


</div>

@endforeach
 