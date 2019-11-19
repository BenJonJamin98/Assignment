<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function likepl (Comment  $comment) {
        $comment -> likePlus ();
        return redirect () -> action ('CommentController@index');
    }
}
