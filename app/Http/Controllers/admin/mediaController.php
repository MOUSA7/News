<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mediaController extends Controller
{

    public function dropzone(){
        return view('admin.news.media');
    }
    public function createImage(Request $request){

        $file = $request->file('photo_id');
        $name = time().$file->getClientOriginalName();
        $file->move('images/news',$name);

        return response()->json(['success'=>$name]);
//        Photo::create(['file'=>$name]);

    }

    //
}
