<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Post\StoreRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(10);
        return view('pages/admin/posts/manage', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $return_url = $request->return_url;
        return view('pages/admin/posts/update', compact('return_url'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        if ($request->validated()) {

            $post = $request->all();
            $post['user_id'] = Auth::user()->id;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $newImageName = date('d-m-Y_h-i-s', time()) . '_' . rand(1000, 9999) . '_image.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('posts/' . Auth::user()->id, $newImageName);
                $post['image'] = $path;
            }

            Post::create($post);
            
            return redirect()->route('posts.index')->with('info', 'Post has been added!'); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $return_url = 'posts.edit';
        return view('pages/admin/posts/update', compact('post', 'return_url')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if ($request->hasFile('image')) {

            if($post->image) {
                Storage::delete($post->image);
            }

            $image = $request->file('image');
            $newImageName = date('d-m-Y_h-i-s', time()) . '_' . rand(1000, 9999) . '_image.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('posts/' . $post->user_id, $newImageName);
            $post->image = $path;
        }

        $post->post = $request->post;
        $post->description = $request->description;

        $post->update();

        return redirect()->route('posts.edit', compact('post'))->with('info', 'Post has been updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (Auth::user()->id == $post->user_id) {

            if($post->image) {
                Storage::delete($post->image);
            }

            $post->delete();

            return redirect()->back()->with('info', 'Запись успешно удалена'); 

        } else {
            return redirect()->back()->with('info', 'Это не ваш пост! Не вам и удалять!');              
        }
    }
}