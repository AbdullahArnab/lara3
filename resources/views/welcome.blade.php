

@include('header')

<div class="container">    
  <div class="row">
      @foreach($data['all_products'] as $row)
    <div class="col-sm-4" >
      <div class="panel panel-primary">
          <a href="{{url('/')}}/product-details/{{$row->product_row_id}}">
        <div class="panel-heading">{{$row->product_name}}</div>
        <div class="panel-body"><img src="{{asset('/public/images/products/thumbs')}}/{{$row->product_image}}" class="img-responsive" style="width:100%" alt="Image"></div>
        </a>
        <div class="panel-footer">{{$row->product_price}}</div>
        
      </div>
    </div>
      @endforeach
  </div>
      
    


@include('footer')


