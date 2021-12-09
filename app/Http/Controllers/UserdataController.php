<?php

namespace App\Http\Controllers;

use App\Models\userdata;
use Illuminate\Http\Request;

class UserdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userdata = Userdata::all();
        return view('index', ['userdatas' => $userdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userdata=new Userdata;

        $userdata->name=$request->input('name');
        $userdata->telephone=$request->input('telephone');
        $userdata->email=$request->input('email');
    
        $userdata->save();
    
        //一覧表示画面にリダイレクト
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userdata=Userdata::find($id);
        
    return view('edit', compact('userdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userdata=Userdata::find($id);

    $userdata->name=$request->input('name');
    $userdata->telephone=$request->input('telephone');
    $userdata->email=$request->input('email');

    //DBに保存
    $userdata->save();

    //処理が終わったらindexにリダイレクト
    return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userdata=Userdata::find($id);

    $userdata->delete();

    return redirect('/');
    }
}
