<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    //
    

    public function search(Request $request){
        $keyword = $request->all();
        $searchPosts = Post::where('title', 'like', '%'.$keyword['keyword'].'%')-> where('status','published') ->orderBy('created_at','desc') -> get();
        return view('searchtable', compact('searchPosts'));
    }


}
