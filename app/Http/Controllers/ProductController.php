<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    var $p = "pages.";

    public function addProduct(){
        return view($this->p . 'addproduct');
    }

    public function store(Request $request)
    {
 
         $product=new Product();
         $product->name=$request->name; 
 
         $file=$request->file;		        
         $filename=time().'.'.$file->getClientOriginalExtension();
         $request->file->move('assets/product',$filename);
         $product->file=$filename;
 
         $product->price=$request->price;
         $product->description=$request->description;
         $product->save();
         $products = Product::get();
         return view('dashboard',['products'=>$products]);
    }
}
