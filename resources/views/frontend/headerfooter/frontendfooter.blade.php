<hr>
<footer  style="background-color: #2F3040">
    
      <div class="container">
        <div class="row">
         <div class="span6">
          <ul class="footer_small_categories_ul">
            @foreach ($categories as $category)
            @php
                $count = DB::table('information')->where('information_category',$category->category_id)->count();
            @endphp
            <li ><a href="{{URL::to('/onlyonecategory/'.$category->category_id)}}" class="footer_small_categories">{{$category->category_name.' ('.$count.')'}}</a></li>
            @endforeach
          </ul>
         </div>
         <div class="span6">
            <p class="footer_small_categories"><script> document.write(new Date().getFullYear()); </script>  </p>
         </div>
        </div>
      </div>
    
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <!-- Javascript Library Files -->
  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.lettering.js')}}"></script>
  <script src="{{asset('frontend/js/parallax/jquery.parallax-1.1.3.js')}}"></script>
  <script src="{{asset('frontend/js/sequence.jquery-min.js')}}"></script>
  <script src="{{asset('frontend/js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{asset('frontend/js/portfolio/setting.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.scrollTo.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.nav.js')}}"></script>
  <script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
  <script src="{{asset('frontend/js/prettyPhoto/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('frontend/js/prettyPhoto/setting.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/venobox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('frontend/js/contactform/contactform.js')}}"></script>

  <!-- Template Custom Javascript File -->
  <script src="{{asset('frontend/js/custom.js')}}"></script>

  <script>

 // Back to top button
 $(window).scroll(function() {
   if ($(this).scrollTop() > 100) {
    
     $('.back-to-top').fadeIn('slow');
   } else {
     $('.back-to-top').fadeOut('slow');
   }
 });
 
 $('.back-to-top').click(function(){
   $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
   return false;
 });
 
   </script>


<script>
   // Gallery carousel (uses the Owl Carousel library)
   $(".gallery-carousel").owlCarousel({
    autoplay: true,
    autoplayTimeout:2500,
    autoplayHoverPause:false,
    dots: true,
    loop: true,
    center:true,
    responsive: { 0: { items: 1 }, 768: { items: 3 }, 992: { items: 4 }, 1200: {items: 5}
    }
  });
</script>


  