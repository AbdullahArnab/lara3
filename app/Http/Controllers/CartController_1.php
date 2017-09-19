<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($product_row_id)
    {
        
        $tracking_number = Session::getId();

        $data['product_details'] = DB::table('products')->where('product_row_id', $product_row_id)->first();
        DB::table('temp_orders')->insert([ 'product_row_id' => $data['product_details']->product_row_id, 'tracking_number' => $tracking_number, 'product_price' => $data['product_details']->product_price, 'product_qty' => 1, 'product_total_price' => $data['product_details']->product_price, 'created_at' => date('Y-m-d H:i:s'), ]);

        return redirect('/mycart');
    }
    
    public function cart()
    {
        $tracking_number = Session::getId();
        $data['ordered_products'] = DB::table('temp_orders')->where('tracking_number', $tracking_number)->get();
        return view('mycart',['data'=>$data]);
    }
    
    
}
