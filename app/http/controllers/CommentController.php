<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
//    specifying the amount of items on a page
//    const COMMENTS_PER_PAGE = 5;

    public function index () {
//        $comments = Comment::paginate(5); // setting the pagination
//        $comments = Comment::paginate(self::COMMENTS_PER_PAGE); // setting the pagination
        $comments = Comment::all (); // old comment call. no pagination
        return view ('comment.comments') -> with (['comments' => $comments]); // displaying the comments

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
