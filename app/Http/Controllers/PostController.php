<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePost;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SavePost $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePost $request)
    {
        $post = Post::create($request->only('title', 'author', 'content'));

        $request->session()->flash('new-post', $post->title);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(SavePost $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->content = $request->input('content');
        $post->save();

        return redirect()
            ->route('post.index')
            ->with('save-post', $post->title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
