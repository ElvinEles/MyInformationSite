<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainPage;
use App\Models\Category;
use App\Models\Information;
use App\Models\About;
use App\Models\AthorWord;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
       // $informations = Information::where('information_active',0)->orderBy('information_id', 'desc')->get();

        $informations = DB::table('information')
                           ->where('information_active',0)
                           ->orderBy('information_id', 'desc')
                           ->paginate(6);


        $popular_informations = Information::where('information_active',0)
                                            ->orderBy('information_countofreading', 'desc')
                                            ->limit(5)
                                            ->get();

        $recent_informations = Information::where('information_active',0)
                                            ->orderBy('information_id', 'desc')
                                            ->limit(5)
                                            ->get();

        $categories = Category::all();
      
        return view('mainpage',
        ["categories"=>$categories,
         "informations"=>$informations,
         "popular_informations"=>$popular_informations,
         "recent_informations"=>$recent_informations
        ]);
    }

    public function information_description($id)
    {
        $categories = Category::all();

        $information = Information::where('information_id',$id)->first();

        $information_countofreading=$information->information_countofreading + 1;

        Information::where('information_id',$id)->update(["information_countofreading"=>$information_countofreading]);
      
       

        return view("information_description",
                   ["categories"=>$categories,
                   "information"=>$information
                    ]);
    }

    public function about()
    {
        $categories = Category::all();

        $about = About::where('about_id',1)->first();
      
        return view("about",
                   ["categories"=>$categories,
                   "about"=>$about
                    ]);
    }

    public function onlyonecategory($id)
    {
        $informations = Information::where('information_category',$id)->orderBy('information_id', 'desc')->get();

        $categories = Category::all();
      
        return view('onlyonecategory',
        ["categories"=>$categories,
         "informations"=>$informations,
         "id"=>$id
        ]);
    }

    public function athorwords()
    {
        $athorwords=AthorWord::all();
        $categories = Category::all();
      
        return view('/athorswords',
        ["categories"=>$categories,
         "athorwords"=>$athorwords
        ]);
    }
}
