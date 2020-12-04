<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd('done');
        $articles = Article::all();
        return view('admin.article.index',compact('articles'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd($sections);
        return view('admin.article.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['user_id'] = \auth()->user()->id;
        if ($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/articles',$name);
            $photo = Photo::create(['file'=>$name]);
            $inputs['photo_id'] =$photo->id;
        }
        Article::create($inputs);

        return redirect('admin/articles');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.article.edit',compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->all();
//        dd($inputs);
        $old_image = $request->old_image;

        $articles = Article::findOrFail($id);
        $inputs['user_id'] = \auth()->user()->id;
        if ($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/articles',$name);
            $photo = Photo::create(['file'=>$name]);
            $inputs['photo_id'] =$photo->id;
            $articles->update($inputs);
        }else{
            $inputs['photo_id'] = $old_image;
            $articles->update($inputs);
        }
        return redirect('admin/articles');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Article::findOrFail($id);
        $articles->delete();
        return redirect('admin/articles');
        //
    }
}
