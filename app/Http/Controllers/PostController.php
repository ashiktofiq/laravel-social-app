<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostController extends Controller
{   
    public function getDashboard()
    {   
        $posts=Post::orderBy('created_at','desc')->get();
        return view('dashboard')->with('posts',$posts);
    }
    public function createPost(Request $request)
    {   
        $this->validate($request,[
            'body' => 'required|max:1000'
             ]);
        $data = $request->only('body');
        $post = Post::create($data);
        $message='There was an error';
        if($request->user()->posts()->save($post))
        {
            $message='Post Successfully Created';
        }
        return redirect()->intended('dashboard')->with(['message'=>$message]);
    }
    
    public function deletePost($post_id)
    {
        $post=Post::where('id',$post_id)->first();
        if(Auth::user()!=$post->user){
            return redirect()->back();
        }
        $post->delete();
        return redirect()->intended('dashboard')->with(['message'=>'Post Deleted Successfully']);
    }
    
}
