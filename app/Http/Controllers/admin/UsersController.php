<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Section;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
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
        $users = User::all();
        $sections = Section::get();
//        foreach ($sections as $section){
//        dd($section->id);
//        }
//        dd($section);
        return view('admin.users.create',compact('sections','users'));
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
//        dd($request->SectionId);
        $inputs = $request->all();
        $inputs['password']=bcrypt($request->password);
        $user = User::create($inputs);
        if ($request->section_id){
            $user->sections()->sync($request->section_id);

        }

        return redirect('admin/users');
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
        $user = User::findOrFail($id);
       $sections = Section::get();
        return view('admin.users.edit',compact('user','sections'));

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
        $users = User::findOrFail($id);
        $inputs['password']=bcrypt($request->password);

        $users->update($inputs);

        if ($request->section_id){
            $users->sections()->sync($request->section_id);

        }

        return redirect('admin/users');
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
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('admin/news');
        //
    }
}
