<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.blog.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blog.create' , compact('categories' , 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $validate = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'exists:tags,id'
        ]);
        $validate['user_id'] = $userId;
        $post = Post::create($validate);
        $post->tags()->attach($request->tags);

        return redirect()->route('admin.posts.index')->with(session()->flash('success' , 'post created succesfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('guest.blog.show' , compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.blog.edit' , compact('categories' , 'tags' , 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if($post->user_id != Auth::user()->id){
            return redirect()->route('admin.posts.index')->with(session()->flash('error' , 'access to post denied'));
        }
        else{
            $validate = $request->validate([
                'title' => 'required',
                'body' => 'required',
                'image' => 'required',
                'category_id' => 'nullable|exists:categories,id',
                'tags' => 'exists:tags,id'
            ]);
            $userId = Auth::user()->id;
            $validate['user_id'] = $userId;
            $post->update($validate);
                $post->tags()->sync($request->tags);
            return redirect()->route('admin.posts.index')->with(session()->flash('success' , 'post edited succesfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        DB::table('post_tag')->where('post_id' , $post->id)->delete();
        $post->delete();
        return redirect()->route('admin.posts.index')->with(session()->flash('success' , 'post deleted succesfully'));
    }
}
