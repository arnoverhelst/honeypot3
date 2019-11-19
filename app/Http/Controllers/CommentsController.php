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
            'content' => 'required',
        ]);

        auth()->user()->comments()->create([
            'content' => $data['content'],
        ]);

        return back();
    }
}
