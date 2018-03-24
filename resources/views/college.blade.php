@extends('welcome')

@section('center')
    @if ( Session::has('success') )
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif

    @if ( Session::has('error') )
    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>{{ Session::get('error') }}</strong>
    </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading text-info" align="center">UPLOAD COLLEGE MATERIALS</div>
        <div class="panel-body">
                <p id="demo"> </p>
    <form class="form-horizontal" action="{{url('upload/college')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Choose your File : <input type="file" name="file" class="form-control" required><br>

    Choose College:  <select name="college_name" class="form-control" required>
      <option value=""  >--select--</option>
         <option value="UDSM">UDSM</option>
         <option value="UDOM">UDOM</option>
         <option value="IFM">IFM</option>
         <option value="ARDHI">ARDHI</option>
         <option value="DIT">DIT</option>
         <option value="ST JOSEPH">ST JOSEPH</option>
      </select>
    <button type="submit" class="btn btn-primary btn-md" style="margin-top: 3%" required>Send Material</button>
    </form>
  </div>
</div>
@endsection
