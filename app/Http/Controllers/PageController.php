<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productDetails($id)
    {
        $arr['single_product_info']=\App\product:: where('product_row_id','=',$id)->first();
        return view('product_details',['data'=>$arr]);
    }

    public function categoryDetails($id)
    {
        $data['categories']=\App\product:: where('category_row_id','=',$id)->get();
        return view('category-details',['data'=>$data]);
    }

    public function aboutUs()
    {

        return view('about-us');
    }



    public function contactUs()
    {

        return view('contact-us');
    }

    public function categories()
    {

      $data['categories']=\App\Category::get();
      return view('categories',['data'=>$data]);
    }



    public function index()
    {
        $arr['all_products'] = \App\Product::get();
        return view('welcome', ['data'=>$arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
