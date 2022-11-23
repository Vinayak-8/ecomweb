<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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

    
}
