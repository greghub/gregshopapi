<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;
use App\Product;
use App\ProductFilters;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductFilters $filters)
    {    
        try {
            $products = Product::filter($filters)->get();

            return response()->json($products, 200);     
        }            
        catch(Exception $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        try {
            $product = Product::create($request->all());

            return response()->json($product, 200);  
        }            
        catch(Exception $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $product = Product::findOrFail($id);

            return response()->json($product, 200);     
        }            
        catch(Exception $e) {
            return response()->json($e, 400);
        }
    }
}
