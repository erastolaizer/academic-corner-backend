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
        <div class="panel-heading text-danger" align="center">UPLOAD LINK FOR THE NEWS</div>
        <div class="panel-body">
    <form class="form-vertical" action="{{url('news')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Head of the News: <input type="text" name="name" class="form-control" required=""><br>
    Link Address to the News: <input type="text" name="url" class="form-control" required=""><br>
    <input type="submit" class="btn btn-primary btn-md" style="margin-top: 3%">
    </form>
  </div>
  </div>
  @endsection
