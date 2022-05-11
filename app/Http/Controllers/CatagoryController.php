<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;


class CatagoryController extends Controller
{
    //
    public function register(Request $request){
        /*
        $product = Product::create([
            'name' => 'ecommerce product',
            'unit' => '10',
            'price' => '50',
            'quantity' => '10',
            ]);
            echo 'Product: ', $product->name; */
        return view('Catagory.register');
        }
         function store(Request $request)
        {
            $Catagory = new Catagory();
            $Catagory->name= $request->name;
            $is_saved = $Catagory->save();
    
            if($is_saved){
                echo "Record saved successfully.";
                }
            else{
              echo "Sorry, try again something went wrong.";
                 }
               
        }
        public function get_all()
        {
         $Catagory = Catagory::all();
         return view('Catagory.get_all', compact('Catagory'));
        }
        public function get_by_id($id)
         {
          $Catagory = Catagory::where('id', $id)->first();
          return view('Catagory.get_by_id', compact('Catagory'));
          }
       /* function get_all(){
            $product=product::all();
            return view('product.list' $product);
        }
    */
}