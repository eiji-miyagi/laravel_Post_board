<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *リソースのリストを表示します。
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $posts = Post::all();
        
       
        return view('posts.index', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *新しいリソースを作成するためのフォームを表示します
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *新しく作成したリソースをストレージに保存します。
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->content =$request->input('content');
        $post->save();
        

        return redirect()->route('posts.show', ['id'=> $post->id])->with('message','Post was successfully created.');
    }

    /**
     * Display the specified resource.
     *指定したリソースを表示します。
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    { 
        return view('posts.show',compact('post'));
    }

    /**
     *Show the form for editing the specif ied resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    { 
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *ストレージ内の指定されたリソースを更新します。
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {   
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('posts.show',[id => $post->id])->with('messeage','Post was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *指定されたリソースをストレージから削除します
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('posts.index');
    }
}
