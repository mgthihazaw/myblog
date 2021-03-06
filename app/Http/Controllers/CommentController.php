<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Reply;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,$post_id)
    {
        $this->validate($request,[
            'comment'=>'required|max:255',
            'user_id'=>'required|integer',
            

        ]);
        
        Comment::Create([
            'comment'=>$request->comment,
            'user_id'=>$request->user_id,
            'post_id'=>$post_id
    ]);
        return redirect()->back();
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
        //
    }


    public function reply(Request $request){
        // dd($request->all());
         $this->validate($request,[
            'reply'=>'required|max:255',
            'user_id'=>'required|integer',
            'comment_id'=>'required|integer',
            

        ]);
        Reply::create([
           'reply'=>$request->reply,
           'comment_id'=>$request->comment_id,
           'user_id'=>$request->user_id,
        ]);
        return redirect()->back();
    }

}
