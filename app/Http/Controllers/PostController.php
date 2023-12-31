<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();

        $posts = Post::orderByDesc('created_at')->get();

        $count = $posts->count();

        return view('post.post_list', ['posts' => $posts, 'count'=> $count]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.register_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $title = $req->title;
        $content = $req->content;

        // $post = new Post;
        // $post->title = $title;
        // $post->content = $content;
        // $post->user_id = 2;
        // $post->save();

        // dd($req->all());
        // Post::create(['title'=>$title, 'content'=>$content, 'user_id'=>2]);
        $req->input('user_id', 1);

        $req->merge(['user_id'=>1]);
        // dd($req->all());

        Post::create($req->all());

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        // $post = Post::where('id', $id)->first();
        // dd($post->title);

        // $post = Post::firstWhere('id', $id);

        return view('post.show_post', ['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post.edit_post', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $post = Post::find($id);
        // $post -> title = $request->title;
        // $post -> content = $request->content;

        // $post->save();

        Post::where('id', $id)->update(['title'=>$request->title, 'content'=>$request->content]);

        return redirect('/posts/' .$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);

        return redirect('/posts');
    }
}
