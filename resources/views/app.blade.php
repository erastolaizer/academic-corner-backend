<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Academic Corner</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="background-color:#8eb4cb">
    <div id="app" >
        <nav class="navbar navbar-default navbar-static-top" style="background-color:#15baa9">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->

                      <a class="navbar-brand" href="{{ url('/') }}">
                               Academic Corner
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                    </ul>
                </div>
            </div>
        </nav>

        <div>

            <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-default">
                              <div class="panel-body">
                                <table class="table table-stripped">
                                  <tr><td><a href="{{url('postpdf')}}" class="text text-info">Upload Material</a></td></tr>
                                  <tr><td><a href="{{url('postNews')}}" class="text text-info">Upload News</a></td></tr>
                                  <tr><td><a href="{{url('postNurseryMaterial')}}" class="text text-info">Upload Nursery Material</a></td></tr>
                                  <tr><td><a href="{{url('postNurseryVideos')}}"  class="text text-info" >Upload Nursery Videos</a></td></tr>
                                  <tr><td><a href="{{url('postResearch')}}" class="text text-info">Upload Research</a></td></tr>
                                  <tr><td><a href="{{url('postCollege')}}" class="text text-info">Upload College Material</a></td></tr>
                                </table>
                              </div>
                    </div>
            </div>
                <div class="col-md-9">

               @yield('center')

                </div>
            </div>
        </div>
          </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
