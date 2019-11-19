<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
        $data = request()->validate([
            'content' => 'required | max:50',
            'post_id' => 'required',
        ]);

        auth()->user()->comments()->create([
            'content' => $data['content'],
            'post_id' => $data['post_id'],
        ]);

        return back();
    }
}
