<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function register()
  {
  return view('product.register');
  }
    function store(Request $request)
    
    {
      $product =new product();
      $product->name = $request->name;
      $product->unit = $request->unit;
      $product->price = $request->price;
      $product->quantity = $request->quantity;
     $is_saved = $product->save();
    if($is_saved){
    echo " MR DEMEKE YIDEG YOUR DATA Record saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
  }
