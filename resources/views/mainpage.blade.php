@extends('index')

@section('title')
    Ana Sehife
@endsection

@section('container')

<!-- section featured -->
<section style="background-color: #2F3040" id="featured">
@php
     $mainpagemain=DB::table("main_page")->where('main_page_id',2)->first();
@endphp
    
      <div  style="margin-top: 0px;padding-bottom:0px;margin-bottom:0px;">
         <img class="main_page_photo" src="{{$mainpagemain->main_page_name}}" alt="No Photo" >
      </div>
   

  

    <!-- end sequence slider -->
  </section>
  <!-- end featured -->

  <!-- section works -->
  <section id="works"  class="section gray-bg">

  
<hr>
      <div  class="owl-carousel gallery-carousel">
        @foreach ($informations as $information)
        <div class="slider_image" >
        <a href="{{URL::to('information_description/'.$information->information_id)}}">
          <img  style="width:300px;height:200px;" src="{{asset('/'.$information->information_photo)}}"  alt="">
          </a>
          <div class="overlay">
            <a class="text" href="{{URL::to('information_description/'.$information->information_id)}}">
              {{substr($information->information_name,0,35)."..."}}
              </a>
          </div>
        </div>
       @endforeach
      </div>

    <hr>

    <div id="main_page_sentence" class="container">
      <div id="main_page_sentence_row"  class="row">
        <div   class="span12">
          <div  class="headline">
            <h3 class="main_page_sentence">Reklam yazi</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
       
          
          <div id="athor_words" class="span6 offset5">
            <a id="athor_words_link" href="{{URL::to('/athorwords')}}"  class="btn btn-color  small_categories">HARUN YAHYANIN RÖPORTAJLARI</a>
          </div>

          
           
      
        <div  class="span12">
           
          <ul class="filter_own">
            @foreach ($categories as $category)
            <li class="web"><a href="{{URL::to('/onlyonecategory/'.$category->category_id)}}" class="btn btn-color small_categories">{{$category->category_name}}</a></li>
            @endforeach
            
            
           
          </ul>
          

          <div  class="row">
          
            <ul class="portfolio-area">
              <hr>
              @foreach ($informations as $information)
              <li style="margin-left:50px;" class="portfolio-item2" data-id="id-0" data-type="web">
                <div >
                  <a href="{{URL::to('information_description/'.$information->information_id)}}">
                  <img class="information_page_hover" style="width:300px;height:200px;" src="{{asset('/'.$information->information_photo)}}"  alt="">
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
      
      
      <div style="display:flex;justify-content: center; background-color:#FF6F61;" class="stuffpost_paginatinonarea">
       
          {{$informations->links('vendor.pagination.custom')}}
       
      </div>

    </div>
   
   

    <div style="margin-top: 30px;" class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" #id="popular_information_name" data-toggle="pill" >En cox baxilanlar</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                          @foreach ($popular_informations as $popular_information)
                          @php
                          $count = DB::table('information')->where('information_id',$popular_information->information_id)->first()->information_countofreading;
                          @endphp
                                <div class="tn-news" style="">
                                    <div class="tn-title  span6">
                                        <a href="{{URL::to('information_description/'.$popular_information->information_id)}}">{{$popular_information->information_name}}</a>
                                    </div>
                                    <div style="backgorund-color:red;text-align:right;margin-right: 10px;" class="span6">
                                      <i class="fas fa-eye"></i> {{$count}}
                                    </div>
                                </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" >YENİ Meqaleler</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                          @foreach ($recent_informations as $recent_information)
                         
                                <div class="tn-news" style="">
                                    <div class="tn-title  span6">
                                        <a href="{{URL::to('information_description/'.$recent_information->information_id)}}">{{$recent_information->information_name}}</a>
                                    </div>
                                   
                                </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>

  

  
  <!-- section works -->
 
@endsection