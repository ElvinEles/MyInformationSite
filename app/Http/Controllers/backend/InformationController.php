<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Category;

class InformationController extends Controller
{
    public function save(Request $request)
    {
        $information=new Information();

        $information->information_name=$request->information_name;
        $information->information_text=$request->information_text;
        $information->information_category=$request->information_category;

        $information_photo_image=$request->file('information_photo');;


        if ($information_photo_image) {
            $image_name=rand(0,1000000000).$information_photo_image->getClientOriginalName();
            $destination="images";
            $information->information_photo=$destination."/".$image_name;
            $information_photo_image->move($destination,$image_name);
          }else {
            $information->information_photo="No Photo";
          }
          

        $result=$information->save();

        if ($result) {
          return redirect('/backendpage/backendinformation');
        } else {
          return redirect()->back();
        }
        

        

       
    }

    public function active($id)
    {
        $result=Information::where('information_id',$id)->update(["information_active"=>0]);

        return redirect()->back();

    }

    public function deactive($id)
    {
        $result=Information::where('information_id',$id)->update(["information_active"=>1]);

        return redirect()->back();

       
    }
    
    public function delete($id)
    {

        $information=Information::where('information_id',$id)->delete();
        return redirect()->back();

       
    }

    public function edited(Request $request,$id)
    {
          
       

        $information=new Information();

      

        $information->information_name=$request->information_name;
        $information->information_text=$request->information_text;
        $information->information_category=$request->information_category;
     

       
     

        $information_photo_image=$request->file('information_photo');;


        if ($information_photo_image) {
            $image_name=rand(0,100000000000).$information_photo_image->getClientOriginalName();
            $destination="images";
            $information->information_photo=$destination."/".$image_name;
            $information_photo_image->move($destination,$image_name);
          }else {

            $information_first=Information::where('information_id',$id)->first();

            $information->information_photo=$information_first->information_photo;
          }

          $result = Information::where('information_id',$id)->update(array(
            'information_name' =>$information->information_name,
            'information_text' =>$information->information_text,
            'information_photo' =>$information->information_photo,
            'information_category' =>$information->information_category,
          ));

          
            return redirect('/backendpage/backendinformation');
          

       
    }

   


}






