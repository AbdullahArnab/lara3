@include('header')


<div class="container">
  <div class="row">
      <h3>Categories</h3>
      @foreach($data['categories'] as $row)
    <li><a href="{{url('/')}}/categories/{{$row->category_row_id}}">
        {{$row->category_name}}</a>
      </li>


      @endforeach
  </div>




@include('footer')
