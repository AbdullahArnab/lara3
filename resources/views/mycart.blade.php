
@include('header')
@foreach($data['ordered_products'] as $row)
<div class="panel-footer">{{$row->temp_order_row_id}} {{$row->tracking_number}} {{$row->product_price}} {{$row->product_total_price}}</div>
@endforeach
@include('footer')