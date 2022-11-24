<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    var $p = "pages.";

    public function addCategory(){
        return view($this->p . 'addcategory');
    }

    public function store(Request $request){
        $data= new Category();

        $request->validate([
            'name' => 'required',
        ]);

        $data->name=$request->name;
        $data->save();
     
        return redirect()->route('dash');

    }

    public function viewCategory($id){
               if(Category::where('id',$id)->exists())
               {
                    $category=Category::where('id',$id)->first();
                    $products = Product::where('cate_id',$category->id)->get();
                    return view($this->p . 'viewproduct',compact('category','products'));

               } else{
                    return redirect()->route('dash');
               }
    }
}
