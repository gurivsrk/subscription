<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreproductRequest;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productUpdate = '';
        // $package = product::select('id','package_name','price','pack_validity','any_offer','featured')->get();
        $package = [];
        return view('pages.product',compact('package'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\package  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\package  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\package  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
       
    }
}
