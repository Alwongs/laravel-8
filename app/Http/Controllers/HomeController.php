<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\SiteHelper;
use App\Models\Post;
use App\Models\Vizit;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        $user_id = Auth::user() ? Auth::user()->id : 0;
        $user_timezone = Auth::user() && Auth::user()->timezone ? Auth::user()->timezone : 'timezone is undefined';


        $posts = Post::orderBy('id', 'desc')->take(3)->get();

        return view('home', compact('posts', 'user_id', 'user_timezone'));
    }

    public function closeSite() {
        return view('maintenance');
    }
}
