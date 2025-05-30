<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
            'news_id' => 'required|exists:news,id',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        Comment::create($validated);

        return back()->with('success', 'Comment posted successfully!');
    }
}
