@extends('backendmainpage')

@section('content')

@php
    $main_page_logo=DB::table('main_page')->where('main_page_id',1)->first();
    $main_page_photo=DB::table('main_page')->where('main_page_id',2)->first();
@endphp

<div class="card" style="width: 100%">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Logo</h6>
    </div>
    <div class="card-body">
      <form method="post" action="{{URL::to('/backendpage/backendmainpagesettings/logo/edit')}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
          <div class="form-group">
            <span style="font-size: 10px;color:red">110*25pixel</span>
          <div class="custom-file">
            <input type="file" class="custom-file-input" value="{{$main_page_logo->main_page_name}}" name="main_page_logo" id="customFile">
            <label class="custom-file-label">{{$main_page_logo->main_page_name}}</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Yenile</button>
      </form>
    </div>
  </div>

  <div class="card" style="width: 100%">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Sekil</h6>
    </div>
    <div class="card-body">
      <form method="post" action="{{URL::to('/backendpage/backendmainpagesettings/photo/edit')}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
          <div class="form-group">
            <span style="font-size: 10px;color:red">1200*500pixel</span>
          <div class="custom-file">
            <input type="file" class="custom-file-input" value="{{$main_page_photo->main_page_name}}" name="main_page_photo" id="customFile">
            <label class="custom-file-label">{{$main_page_photo->main_page_name}}</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Yenile</button>
      </form>
    </div>
  </div>
    
@endsection