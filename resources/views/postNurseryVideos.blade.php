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
        <div class="panel-heading text-danger" align="center">UPLOAD LINK FOR THE NURSERY VIDEOS</div>
        <div class="panel-body">
    <form class="form-vertical" action="{{url('upload/nursery_videos')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Video Name: <input type="text" name="name" class="form-control" required=""><br>
    Link Address to the Video: <input type="text" name="url" class="form-control" required=""><br>
    <input type="submit" class="btn btn-primary btn-md" style="margin-top: 3%">
    </form>
  </div>
  </div>
  @endsection
