<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user',
        'created_at',
        'comments'
    ];

    public function likePlus()
    {
        $this -> likes += 1;
        $this -> update ();
    }

    public function dislikePlus()
    {
        $this -> dislikes += 1;
        $this -> update ();
    }
}
