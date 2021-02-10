<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function update(Request $request)
    {

        $about_text=$request->about_text;

        $result=About::where('about_id',1)
                     ->update(['about_text'=>$about_text]);

        return redirect()->back();

    }
}
