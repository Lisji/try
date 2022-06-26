<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
class PostController extends Controller
{
    //
    public function requestComment(Request $request){
        $comment = $request;
        
        Comment::create([
            'post_id' => $comment -> pid,
            'name' => $comment-> name,
            'email' => $comment-> email,
            'website' => $comment -> website,
            'comment' => $comment -> comment,
        ]);

        return redirect()->back();
    }
}
