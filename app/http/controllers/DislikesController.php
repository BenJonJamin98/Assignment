<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class DislikesController extends Controller
{
    public function dislikepl (Comment $comment) {
        $comment -> dislikePlus ();
        return redirect () -> action ('CommentController@index');
    }
}
