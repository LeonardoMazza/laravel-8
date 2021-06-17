<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StoreUpdatePost;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){

        $posts = Post::get();

        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request){
        
        Post::create($request->all());

        return redirect()->route('posts.index');
    }
}