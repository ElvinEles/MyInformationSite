<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Input;
use App\Models\MainPage;

class MainPageController extends Controller
{
    public function main_page_logo_edited(Request $request)
    {
        $main_page_logo=$request->file('main_page_logo');

        if ($main_page_logo) {
            $image_name=rand(0,10000).$main_page_logo->getClientOriginalName();
            $destination="images";
            $main_page_logo_name=$destination."/".$image_name;
            $main_page_logo->move($destination,$image_name);

            $result=MainPage::where('main_page_id',1)->update(["main_page_name"=>$main_page_logo_name]);

            return redirect()->back();

          }else {
            
          }

          return redirect()->back();
    }

    public function main_page_photo_edited(Request $request)
    {
        $main_page_photo=$request->file('main_page_photo');

        if ($main_page_photo) {
            $image_name=rand(0,10000).$main_page_photo->getClientOriginalName();
            $destination="images";
            $main_page_photo_name=$destination."/".$image_name;
            $main_page_photo->move($destination,$image_name);

            $result=MainPage::where('main_page_id',2)->update(["main_page_name"=>$main_page_photo_name]);

            return redirect()->back();

          }else {
            
          }

          return redirect()->back();
    }
}
