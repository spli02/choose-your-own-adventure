<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=1)
    {
        if (Session::has('url')) {
            $url = Session::get('url');
            return redirect($url);

        } else {
            $chapter = DB::table('chapter')->where('id',$id)->first();
            $choices = DB::table('choice')->where('chapter_id',$id)->get();
            $illustration = DB::table('illustration')->where('chapter_id',$id)->first();

            return view('layouts/show',compact('chapter','choices','illustration'));
        }
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
        $chapter = DB::table('chapter')->where('id',$id)->first();
        $choices = DB::table('choice')->where('chapter_id',$id)->orderBy('order')->get();
        $illustration = DB::table('illustration')->where('chapter_id',$id)->first();
        session(['id' => $id]);

        return view('layouts/show',compact('chapter','choices','illustration'));
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
        //
    }
}
