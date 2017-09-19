@include('header')

<div class="container">    
  <div class="row">
      
    <div class="col-sm-4">
      <div class="panel panel-primary">
          <a href="javascript:void(0)">
        <div class="panel-heading">{{$data['single_product_info']->product_name}}</div>
        <div class="panel-body"><img data-toggle="modal" data-target="#myModal" src="{{asset('/public/images/products/thumbs')}}/{{$data['single_product_info']->product_image}}" class="img-responsive" style="width:100%" alt="Image"></div>
        </a>
        <div class="panel-footer">{{$data['single_product_info']->product_price}}</div>
        
      </div>
    </div>
      <form action="{{url('/')}}/addToCart" method="post">{{csrf_field()}}
          
          <input type="number" name="quantity" value="1"></input>
          <input type="hidden" name="product_row_id" value="{{$data['single_product_info']->product_row_id}}"></input>
          <input type="submit" class="btn btn-info" value="submit"></input>
          
      </form>
      
      
  </div>
    
    <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <img class="close" data-dismiss="modal" src="{{asset('/public/images/products/')}}/{{$data['single_product_info']->product_image}}" class="img-responsive" style="width:100%" alt="Image">
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    


@include('footer')
