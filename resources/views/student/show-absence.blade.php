 @extends('layouts.master')
 @section('content')
 <div class="card-body">
        <div class="callout callout-danger">
          <h5>Absence count</h5>

          <p>You have: {{$count}} absence and attended: {{$took}} out of: {{$sum}} Lectures</p>
        </div>
       
      </div>
  @endsection