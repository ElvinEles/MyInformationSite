<nav>
    <ul class="nav pull-right">
      <li><a class="menubarmyown" href="{{URL::to('/')}}">ANA Sehife</a></li>
      @foreach ($categories as $category)
      <li><a class="menubarmyown" href="{{URL::to('/onlyonecategory/'.$category->category_id)}}">{{$category->category_name}}</a></li>
      @endforeach
      
      <li><a  class="menubarmyown" href="{{URL::to('/about')}}" >Haqqimizda</a></li>
    </ul>
  </nav>