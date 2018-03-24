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
    <script type="text/javascript">

      function getSub(class_id){
        $('#demo_1').children('option:not(:first)').remove();
        console.log(class_id);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                var subj = JSON.parse(xhr.responseText);
                var subjects = subj.subjects;
                for (i = 0, len = subjects.length, subje = ""; i < len; i++) {
                  $('#demo_1').append($('<option>',{
                    value :subjects[i].subject_id ,
                    text  :subjects[i].subject_name
                  }));
         }

         }
      }
        xhr.open('GET', 'http://192.168.43.224:8000/subjects/'+ class_id, true);
        xhr.send(null);
     }
    </script>

    <div class="panel panel-default">
        <div class="panel-heading text-info" align="center">UPLOAD SUBJECTS PDF</div>
        <div class="panel-body">
                <p id="demo"> </p>
    <form class="form-horizontal" action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Choose your File : <input type="file" name="file" class="form-control" required><br>
    Choose Class:     <select name="class_id" id="C" class="form-control" required="" onChange="getSub(C.value)">
      <option value=""  >--select--</option>
      <option value="C1">class 1</option>
      <option value="C2">class 2</option>
      <option value="C3">class 3</option>
      <option value="C4">class 4</option>
      <option value="C5">class 5</option>
      <option value="C6">class 6</option>
      <option value="C7">class 7</option>
      <option value="C34">Review Class 3 & 4</option>
      <option value="C567">Review class 5,6 & 7</option>
      <option value="F1">Form 1</option>
      <option value="F2">Form 2</option>
      <option value="F3">Form 3</option>
      <option value="F4">Form 4</option>
      <option value="F5">Form 5</option>
      <option value="F6">Form 6</option>
    </select><br>

    Choose Subject: <select class="form-control" name="subject_id" id="demo_1" required>
      <option value=""  >--select--</option>
    </select><br>

    Choose category:  <select name="category" class="form-control" required>
      <option value=""  >--select--</option>
         <option value="notes">Notes</option>
         <option value="exams">exams</option>
         <option value="review">Review</option>
         <option value="necta">Necta</option>
      </select>
    <button type="submit" class="btn btn-primary btn-md" style="margin-top: 3%">Send Material</button>
    </form>
  </div>
</div>
@endsection
