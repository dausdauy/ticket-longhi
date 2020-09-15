<?php

namespace App\Http\Controllers;

use App\Category;
use App\Knowledge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $kgroups = Category::rightjoin('knowledge', 'knowledge.category', '=', 'categories.id')->get();
        // dd($kgroups);
                            
        return view('layouts.knowledge.body', ['kgroups'=>$kgroups, 'categories'=>$categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $categories = Category::all();
        $knowledges = Knowledge::join('categories', 'knowledge.category', '=', 'categories.id')->get();
        // dd($kgroups);
                            
        return view('layouts.knowledge.admin', ['knowledges'=>$knowledges, 'categories'=>$categories]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'file_data' => 'required|mimetypes:application/pdf|max:10000'
        ]);

        $data = $request->input('file_data');
        $dt = date("dmY his A", time());
        $file = $dt.'_'.$request->file('file_data')->getClientOriginalName();
        $destination = public_path('uploads');
        $request->file('file_data')->move($destination, $file);
        
        $data = new Knowledge([
            'title'     =>      $request->get('title'),
            'category'  =>      $request->get('category'),
            'file'      =>      $file,
        ]);

        $data->save();

        return redirect()->back()->with('success', $file.' has been Added.');
        // return redirect()->back()->with('success', 'Saved!!');
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
        //
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
        $file = Knowledge::where('id',$id)->value('file');
        File::delete(public_path('uploads/'.$file));

        Knowledge::where('id',$id)->delete();
        
        return redirect()->back()->with('danger', $file.' has been Deleted.');
    }
}
