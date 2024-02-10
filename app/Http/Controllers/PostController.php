<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:text,image',
            'content' => 'required_if:type,text',
            'image' => 'required_if:type,image|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Post();
        $post->type = $request->type;

        if ($request->type === 'text') {
            $post->content = $request->content;
        } elseif ($request->type === 'image') {
            $path = $request->file('image')->store('images');
            $post->image = $path;
        }

        $post->save();

        return redirect()->route('posts.index');
    }
}
