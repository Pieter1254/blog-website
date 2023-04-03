<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostCommentsController extends Controller
{
    public function store(Post $post) 
    {
        // validation
        request()->validate([
            'body' => 'required'
        ]);


        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return back();
    }
}
