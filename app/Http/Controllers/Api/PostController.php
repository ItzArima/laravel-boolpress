<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        /* return PostResource::collection(Post::with(['tags', 'category'])->paginate()); */
        $posts = Post::all();
        return response()->json([
            'status' => 200,
            'response' => $posts
        ]);
    }
}
