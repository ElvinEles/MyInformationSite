@extends('backendmainpage')


@section('content')
<div class="col-md-12">
    <form role="form" method="post" action="{{URL::to('backend/backendabout/update')}}" enctype='multipart/form-data'>
      {{ csrf_field() }}
     


        <div class="form-group">
          <label>Mətn*:</label>
          <textarea required name="about_text" id="about_text" rows="10" cols="200">
          {{$about->about_text}}
         </textarea>
        </div>

        <div class="form-group">
          <button type="submit"  id="submitbutton"  class="btn btn-primary btn-block">Yenilə</button>
          
        </div>

    </form>
    <br />

    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

    <script>
      // Replace the <textarea id="editor1"> with a CKEditor 4
      // instance, using default configuration.
      CKEDITOR.replace( 'about_text' );
  </script>


</div>
@endsection