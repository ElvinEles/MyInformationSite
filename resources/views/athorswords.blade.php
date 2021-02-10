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
                <h3 class="information_name_design">Elaveler</h3>
              </div>
            </div>
          </div>
    
          <div  class="row">
            <div>
                <!-- start: Accordion -->
                <div class="accordion" id="accordion2">
                    @foreach ($athorwords as $athorword)
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$athorword->athorwords_id}}">
                        <i class="fas fa-minus"></i>  {{$athorword->athorwords_name}} </a>
                    </div>
                    <div id="collapse{{$athorword->athorwords_id}}" class="accordion-body collapse">
                      <div class="accordion-inner">
                        {!!$athorword->athorwords_text!!}
                        </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!--end: Accordion -->
              </div>
            </div>
          </div>
        </div>
    
       
          
       
      </section>
      <!-- section works -->
  <!-- section works -->
 
@endsection