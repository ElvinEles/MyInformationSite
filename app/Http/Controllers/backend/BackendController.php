<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MainPage;
use App\Models\Information;
use App\Models\About;
use App\Models\AthorWord;
class BackendController extends Controller
{
  
    public function login()
    {
       return view('/loginpagecustom');
    }

  



    public function index()
    {
       return view('/backendmainpage');
    }

    public function allcategories()
    {
      $categories = Category::all();


      return view('/backend/backendcategories/backendallcategories')->with("categories",$categories);
    }

    public function backendmainpagesettings()
    {
      $mainpages = MainPage::all();

      return view('/backend/backendmainpage/backendmainpagesettings')->with("mainpages",$mainpages);
      
    }

    
    public function backendinformation()
    {
      $backendinformations = Information::all();

      return view('/backend/backendinformation/backendinformation')->with("backendinformations",$backendinformations);
      
    }

    public function add_page()
    {
      $categories = Category::all();
      return view('/backend/backendinformation/backendinformationadd')->with("categories",$categories);
      
    }


    public function edit_page($id)
    {
        $categories = Category::all();
        $information=Information::where('information_id',$id)->first();

        $category_information = Category::where('category_id',$information->information_category)->first();


        return view('/backend/backendinformation/backendinformationedit',
        ["categories"=>$categories,
         "information"=>$information,
         "category_information"=>$category_information
        ]);
       
    }

    public function about()
    {
      $about=About::where('about_id',1)->first();
      
      return view('/backend/backendabout/backendabout')->with("about",$about);
      
    }

    
    public function backendathorwords()
    {
      $athorwords=AthorWord::all();
      
      return view('/backend/backendinformation/backendathorwords')->with("athorwords",$athorwords);
      
    }

    public function athorwords_add_page()
    {
      $athorwords=AthorWord::all();
      
      return view('/backend/backendinformation/backendathorwordsadd');
      
    }

    

    public function edit_page_athorwords($id)
    {
       
        $athorword=AthorWord::where('athorwords_id',$id)->first();

        
        return view('/backend/backendinformation/backendathorwordsedit',
        ["athorword"=>$athorword]);
       
    }
}
