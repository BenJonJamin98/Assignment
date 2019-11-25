<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

class CommentController extends Controller
{

    const COMMENTS_PER_PAGE = 5;

    public function index () {
        $comments = Comment::paginate(self::COMMENTS_PER_PAGE); // setting the pagination
        return view ('comment.comments') -> with (['comments' => $comments]);
    }

    public function create()
    {
//        return redirect () -> action ('CommentController@index');
    }

    public function store(Request $request)
    {
        //
    }
// Calling a user to view
    public function show(Comment $comment)
    {
        return view ('comment.show') -> with (['comment' => $comment]);
    }
// Updating a comment
    public function edit(Comment $comment)
    {
        $comment -> update (Request (['comment']));
        return view ('comment.edit') -> with (['comment' => $comment]);
//        return redirect () -> action ('CommentController@index');
    }
// Posting the updated comment
    public function update(Request $request, Comment $comment)
    {
        $comment -> update (['comment' => $request -> comment]);
        return redirect () -> action ('CommentController@index');
    }
// Delete comment
    public function destroy(Comment $comment)
    {
        $comment -> delete();
        return redirect () -> action ('CommentController@index');
    }
}
