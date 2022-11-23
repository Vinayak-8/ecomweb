<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    var $p = "pages.";

    public function addProduct(){
        $category=Category::all();
        return view($this->p . 'addproduct', compact('category'));
    }

    public function store(Request $request)
    {
         $product=new Product();
         $product->cate_id=$request->cate_id; 
         $product->name=$request->name; 
 
         $file=$request->file;		        
         $filename=time().'.'.$file->getClientOriginalExtension();
         $request->file->move('assets/product',$filename);
         $product->file=$filename;
 
         $product->price=$request->price;
         $product->description=$request->description;
         $product->save();

         return redirect()->route('dash');
    }

    public function searchProduct(Request $req){
            $category=Category::all();
            $products = Product::where('name','LIKE', '%' . $req->q . '%')
            ->orWhere('price','LIKE', '%' . $req->q . '%')
            ->orWhere('description','LIKE', '%' . $req->q . '%')->get();
            foreach($products as $prod) {
                $prod['cat_name'] = Category::where('id', $prod->cate_id)->first(['name'])->name;
            }
            return view('dashboard',['products'=>$products, 'category'=>$category]);
    }

}
