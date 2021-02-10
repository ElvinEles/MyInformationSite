<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AthorWord;


class AthorWordsController extends Controller
{


    public function save(Request $request)
    {
        $athorword=new AthorWord();

        $athorword->athorwords_name=$request->athorwords_name;
        $athorword->athorwords_text=$request->athorwords_text;
    

        $result=$athorword->save();

        if ($result) {
          return redirect('/backendpage/backendathorwords');
        } else {
          return redirect()->back();
        }             
    }


    public function edited(Request $request,$id)
    {
          
       

        $athorword=new AthorWord();

        $athorword->athorwords_name=$request->athorwords_name;
        $athorword->athorwords_text=$request->athorwords_text;
 
        

          $result = AthorWord::where('athorwords_id',$id)->update(array(
            'athorwords_name' =>$athorword->athorwords_name,
            'athorwords_text' =>$athorword->athorwords_text
          ));

          
            return redirect('/backendpage/backendathorwords');
    }

    public function delete($id)
    {

        $athorword=AthorWord::where('athorwords_id',$id)->delete();
        return redirect()->back();

       
    }
}
