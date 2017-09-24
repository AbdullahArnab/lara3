
@include ('header');
<div class="container">
	@if( isset($data['temp_orders']) && count($data['temp_orders'] ) )
	<form method="post" action="{{ url('/') }}/update-cart">
		<div class="row cart-content">    
			<!-- product details -->   
			<div id="cart-container">
				
				 {!! csrf_field() !!} <!-- this is a helper method =input typr=hidddden, name="". value=""-->
					<table class="table table-bordered">
						<thead>
							<tr>
							<th>Quantity</th>
							<th>Product Name</th>
							<th>Price Per Item</th>
							<th>Total Pricce</th>
							<th>Delete</th>
							</tr>
						</thead>
						<tbody>	

											
						@foreach($data['temp_orders'] as $temp_order)	
						<tr id="cart-item-{{ $temp_order->temp_order_row_id }}">
						  <th scope="row"> <input type="text" name="product_qty_{{ $temp_order->temp_order_row_id }}" value="{{ $temp_order->product_qty }}" /> </th>
						  <td>{{ $temp_order->product_name }}</td>
						  <td>${{ $temp_order->product_price }}</td>
						  <td>${{ $temp_order->product_total_price }}</td>
						  <td><a href="javascript:void(0)" temp_order_row_id="{{ $temp_order->temp_order_row_id }}" class="remove-item" /> Delete </a></td>
						</tr>
						<input type="hidden" name="temp_order_row_id[]" value="{{ $temp_order->temp_order_row_id }}" />						
						
						@endforeach
						
						<tr>
						<td colspan="3"> &nbsp;</td>
                                                <td> <strong>Total:</strong><text id="total_price"> ${{ $data['total_price'] }}</text></td>
						<td> &nbsp;</td>
						</tr>						
					  </tbody>
					</table>
			</div>
		 <!-- End Normal Product -->           
		</div>
		
		<div class="row cart-content"> 			
			<div class="col-md-2"> <input type="submit" class="btn btn-info" value="UPDATE QUANTITY" /></div>			
			<div class="col-md-2"> 
				<a href="{{ url('/') }}/bdcommerce" /> 
				<button type="button" class="btn btn-info">Coninue Shopping</button> </a>			
			</div>				
			<div class="col-md-2"> 
				<a href="{{ url('/') }}/checkout" /> 
				<button type="button" class="btn btn-info">Checkout</button> </a>			
			</div>
			<div class="col-md-2"> 	
				<a href="javascript:void(0)" temp_order_row_id="{{ $temp_order->temp_order_row_id }}" id="remove-all" /> 
				<button type="button" class="btn btn-info">Remove All</button> </a>
			</div>
		</div>
	</form>
	@else
	<div class="row">
		<div id="cart-container"> Cart is empty!  Please Select Product to Buy!</div>
	</div>	
	@endif
</div>
	


<script type="text/javascript"> 
$(document).ready(function() {

 $('a.remove-item') . click( function() {
    var temp_order_row_id = $(this).attr('temp_order_row_id');
	if( !confirm('Are you sure to remove this item ? '))
	{
		return false;
	}
	
	var dataString = 'temp_order_row_id=' + temp_order_row_id;
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
        url : "{{url ('/') }}" + "/cartItemDelete",
        data : dataString,                    
        success : function(status) {
            //alert(status);
            //return false; 
		    $('#cart-item-' + temp_order_row_id) . remove();
                    //document.getElementById("total_price").innerHTML = "Total: $"+status;
                    $('#total_price').html(status);
        }
    });
	
    	
 });
 
  $('#remove-all') . click( function() {
  
	//var dataString = 'temp_order_row_id=' + temp_order_row_id;
	if( !confirm('Are you sure to remove all items from cart ? '))
	{
		return false;
	}
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
        url : "{{url ('/') }}" + "/cartItemDeleteAll",
        //data : dataString,                    
        success : function(status) {
		 $('.cart-content') . hide();
		 $('.container').html('<div class="row"><div id="cart-container"> Cart is empty!  Please Select Product to Buy!</div></div>'); 
        }
    });
	
    	
 });
 
 
 }); 
</script>


@include ('footer');
