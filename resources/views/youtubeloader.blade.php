<!DOCTYPE html>
<html>
  <head>
  <title>Progress Test</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

   <!--<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>  -->
</head>
<body>
  <h1>YouTube Progress Bar</h1>
  <button id="load">Load</button>

  <script type="text/javascript">
  $(function() {
  var $progress = $('#progress');
  $(document).ajaxStart(function() {
    //only add progress bar if not added yet.
    if ($progress.length === 0) {
      $progress = $('<div><dt/><dd/></div>').attr('id', 'progress');
      $("body").append($progress);
    }
    $progress.width((50 + Math.random() * 30) + "%");
  });

  $(document).ajaxComplete(function() {
    //End loading animation
    $progress.width("100%").delay(200).fadeOut(400, function() {
      $progress.width("0%").delay(200).show();
    });
  });

  $('#load').on('click', function() {
    $.getJSON('http://jsonip.com');
  });
});
  </script>

  </body>
</html>
