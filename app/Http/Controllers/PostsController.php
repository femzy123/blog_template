<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use PhpParser\Node\Stmt\Return_;

class PostsController extends Controller
{

    public function index()
    {
        //
        $posts = Post::paginate(10);

        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        //
        return view('posts.create');
    }


    public function store(Request $request)
    {
        //

//        $post = new Post;
//
//        $post->user_id =  Auth::user()->id;
//        $post->content = $request->content;
////        $post->post_on = $request->post_on;
//
//        $post->save();

        Post::create($request->all());

        return redirect('/posts');

    }


    public function show($id)
    {
        $posts = Post::findOrFail($id);

        return view('posts.show', compact('posts'));
    }


    public function edit($id)
    {
        $posts = Post::findOrFail($id);

        return view('posts.edit', compact('posts'));
    }


    public function update(Request $request, $id)
    {
        $posts = Post::findOrFail($id);

        $posts->update($request->all());

        return redirect('/posts');
    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);

        $posts->delete();

        return redirect('/posts');
    }
}
