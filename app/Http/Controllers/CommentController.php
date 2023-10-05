<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function commentView(Request $request)
{
    $comments= Comment::select()->get();
    return view('comment')->with('comments',$comments);
}

    public function sendComment(Request $request)
{
    $comment= new Comment;
    $comment->comment= $request->pc;
    $comment->save();
    $comments= Comment::select()->get();
    return view('comment')->with('comments',$comments);

}
}
