<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //requres you to fill the form and the topic id
    public function post(Request $request, $topic_id) {
        $content = $request->input('post-text');
        $user_id = Auth::user()->id;
        Post::create([
            'content' => $content,
            'user_id' => $user_id,
            'topic_id' => $topic_id
        ]);

        //redects you to the topic you just posted
        return redirect()->route('topic', ['id'=>$topic_id]);
    }

    //the edit function
    public function edit(Request $request, $post_id) {
        $post = Post::findOrFail($post_id); //find post ID
        $post->content = $request->input('content'); //requres you to update the content
        $post->save();

        return redirect()->back();
    }

    //the delete function
   public function delete($post_id) {
        $post = Post::findOrFail($post_id);// finds the post
        $post->delete();
        
        return redirect()->back();
    }
}
