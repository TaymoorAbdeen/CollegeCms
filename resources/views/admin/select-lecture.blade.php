<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
      
              <div class="card-header">
                <h3 class="card-title">Select A lecture</h3>
      
               </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Lectures that you are attending</label>
                      <form action="{{$url}}" class="my-form" method="POST">
                        {{ csrf_field() }}
                        <select class="form-control select2 select2-hidden-accessible" name="lecture_id" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                         @foreach ($lectures as $lecture)
                                             <option value="{{$lecture->id}}">{{$lecture->name}}</option>
                                         @endforeach
                                        </select>
                        <br>
                        <button type="submit" class="btn btn-block btn-primary btn-lg">Select</button> </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      
          </div>
        </div>
         