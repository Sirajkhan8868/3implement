<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postid)
    {
        Comment::create([
            'post_id'=> $postid,
             'user_id'=> auth()->id(),
             'content'=> request()->content
        ]);
        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
