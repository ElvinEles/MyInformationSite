@extends('backendmainpage')

@section('content')
    
    <div class="card" style="width: 100%">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Kateqoriya düzəlişi</h6>
        </div>
        <div class="card-body">
          <form method="post" action="{{URL::to('/backendpage/allcategories/category/edited')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text"  name="category_id" class="form-control" value="{{$category->category_id}}" id="category_id" hidden>
            </div>
            <div class="form-group">
              <label>Kateqoriya adı</label>
              <input type="text" autocomplete="off" class="form-control" name="category_name" value="{{$category->category_name}}" id="category_name" >
            </div>
            <button type="submit" class="btn btn-primary btn-block">Yenilə</button>
          </form>
        </div>
      </div>
@endsection