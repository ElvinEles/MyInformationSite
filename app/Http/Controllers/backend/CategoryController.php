<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category_edit($id)
    {
        $category = Category::where('category_id',$id)->first();

        return view('backend/backendcategories/backendcategoryedit')->with("category",$category);
    }

    public function category_edited(Request $request)
    {
        $category_id=$request->category_id;
        $category_name=ucwords($request->category_name);


        if(trim($category_name) !=null){
            $result=Category::where('category_id',$category_id)->update(["category_name"=>$category_name]);

            return redirect('/backendpage/allcategories');

        }

        
    }
}
