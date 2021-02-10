@extends('backendmainpage')


@section('content')




<div class="col-md-12">
    <form role="form" method="post" action="{{URL::to('backend/backendathorword/edited/'.$athorword->athorwords_id)}}">
      {{ csrf_field() }}
        <div class="form-group">
            <label>Melumat başlığı*:</label>
            <input value="{{$athorword->athorwords_name}}" required name="athorwords_name" autocomplete="off" id="athorwords_name" class="form-control" />
        </div>

    
        <div class="form-group">
          <label>Mətn*:</label>
          <textarea required name="athorwords_text" id="athorwords_text" rows="10" cols="80">
          {{$athorword->athorwords_text}}
         </textarea>
        </div>

        <div class="form-group">
          <button type="submit"  id="submitbutton"  class="btn btn-primary btn-block">Təsdiq et</button>
       
        </div>

    </form>
    <br />

    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

    <script>
      // Replace the <textarea id="editor1"> with a CKEditor 4
      // instance, using default configuration.
      CKEDITOR.replace( 'athorwords_text' );
  </script>


</div>
@endsection