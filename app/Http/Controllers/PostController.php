<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Post\StoreRequest as PostStoreRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

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
    public function store(PostStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        
        if (!empty($data['image'])) {
            $data['image'] = Storage::disk('public')->put('images', $data['image']);
        }

        Post::create($data);


        return redirect()->route('posts.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (Auth::user()->id === $post->user->id) {

            if($post->image) {
                Storage::delete($post->image);
            }

            $post->delete();
            return redirect()->back()->with('info', 'Запись успешно удалена'); 













        } else {
            return redirect()->back()->with('info', 'Это не ваш пост! Не вам и удалять!');              
        }

    }
};