@extends('backendmainpage')


@section('content')




<div class="col-md-12">
    <form role="form" method="post" action="{{URL::to('backend/backendinformation/edited/'.$information->information_id)}}" enctype='multipart/form-data'>
      {{ csrf_field() }}
        <div class="form-group">
            <label>Melumat başlığı*:</label>
            <span hidden class="warning_message">Xüsusi işarələrdən istifadə etməyin</span>
            <input value="{{$information->information_name}}" required name="information_name" autocomplete="off" id="information_name" class="form-control" />
        </div>

      


        <div class="form-group">
            <label>Kateqoriyalar*:</label>
            <select required class="form-control" id="information_category" name="information_category">

              <option value="{{$category_information->category_id}}">{{$category_information->category_name}}</option>
             @foreach ($categories as $category)
             <option value="{{$category->category_id}}">{{$category->category_name}}</option>
             @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Şəkil 1*: 300x200</label>
            <input  type="file" class="form-control" name="information_photo"/>
        </div>


        <div class="form-group">
          <label>Mətn*:</label>
          <textarea required name="information_text" id="information_text" rows="10" cols="80">
          {{$information->information_text}}
         </textarea>
        </div>

        <div class="form-group">
          <button type="submit"  id="submitbutton"  class="btn btn-primary btn-block">Təsdiq et</button>
          <button type="reset" class="btn btn-danger btn-block">Yenilə</button>
        </div>

    </form>
    <br />

    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

    <script>
      // Replace the <textarea id="editor1"> with a CKEditor 4
      // instance, using default configuration.
      CKEDITOR.replace( 'information_text' );
  </script>


</div>
@endsection