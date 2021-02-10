@extends('index')

@section('title')
    Ana Sayfa
@endsection

@section('container')

<!-- section featured -->

  <!-- end featured -->

  <!-- section works -->
  <section id="about" class="section">
    <div class="gray-shadow">
    </div>
    

    <div class="container">
      <div class="row">
          <div class="span3">
            <img style="border-radius: 20%" src="{{asset('images/about/authorphoto.jpg')}}" alt="No Photo">
            
          </div>
        <div class="span9">
          <h3 style="font-family:'Anton';font-size:40px;">
         
            {!!$about->about_name!!}
            
          </h3>
         
          <hr>
          <p>
            
            {!!$about->about_text!!}


            <p>
       </div>
      </div>
    </div>
  </section>
  <!-- section works -->
 
@endsection