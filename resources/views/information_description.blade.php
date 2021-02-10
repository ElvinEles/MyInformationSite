@extends('index')

@section('title')
    Ana Sehife
@endsection

@section('container')

<!-- section featured -->

  <!-- end featured -->

  <!-- section works -->
  <section class="section">
    <div class="gray-shadow">
    </div>
    
    <div  class="container">
      <div class="row">
        <div class="span12">
          <div>
            <h3 class="information_name_design">{{$information->information_name}}</h3>
          </div>
        </div>
      </div>

      <div  class="row">
        <div>
            <p>
              {!!$information->information_text!!}
              <p>
        </div>
      </div>
    </div>

   
      
   
  </section>
  <!-- section works -->
 
@endsection