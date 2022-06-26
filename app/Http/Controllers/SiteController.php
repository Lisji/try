<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    public function renderBlogPage(){
        $posts = Post::withCount('comments')->where('status','published')->orderBy('created_at','desc')->paginate(5);
        return view('blog',compact('posts'));
    }
    
    public function renderPostPage($post_id){
        $post = Post::with(['Category'])->findOrFail($post_id);
        $comments = Comment::where('post_id', $post_id)->get();
        
        return view('post', compact('post', 'comments'));
    }

    public function getIndex(){
        $banners = Banner::get();
        return view('index', compact('banners'));
    }
}
