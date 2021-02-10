@extends('index')

@section('title')
    Ana Sehife
@endsection

@section('container')

<!-- section featured -->

  <!-- end featured -->

  <!-- section works -->
  <section class="section">
    <div class="container">
      <div class="row">
        
        
        <div class="span12">
          <ul class="filter_own">
            @foreach ($categories as $category)
            @if ($category->category_id == $id)
            <li class="web"><a href="{{URL::to('/onlyonecategory/'.$category->category_id)}}" class="btn selected_menu small_categories">{{$category->category_name}}</a></li>
            
            @else
            <li class="web"><a href="{{URL::to('/onlyonecategory/'.$category->category_id)}}" class="btn btn-color small_categories">{{$category->category_name}}</a></li>

            @endif
            @endforeach
          </ul>
          <div class="row">
            <ul class="portfolio-area">
<hr>
              @foreach ($informations as $information)
              
              <li style="margin-left:50px;" class="portfolio-item2" data-id="id-0" data-type="web">
                <div >
                  <a href="{{URL::to('information_description/'.$information->information_id)}}" >
                  <img class="information_page_hover" style="width:300px;height:200px;" src="{{asset('/'.$information->information_photo)}}"  alt="No Photo">
                  </a>
                  <div >
                    <a href="{{URL::to('information_description/'.$information->information_id)}}" class="btn btn-color btn-block"><h5 class="information_name_color">{{substr($information->information_name,0,35)."..."}}</h5></a>
                  </div>
                </div>
                <hr>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section works -->
 
@endsection