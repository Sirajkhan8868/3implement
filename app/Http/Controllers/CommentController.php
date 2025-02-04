<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postid)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        Comment::create([
            'post_id' => $postid,
            'user_id' => 1,
            'content' => $request->input('content')
        ]);

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
