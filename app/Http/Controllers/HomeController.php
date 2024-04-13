<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Vizit;

class HomeController extends Controller
{
    public function index() {
// dd($vizit);
        // $userInfo = '(' .date("d.m.Y h:s"). ') user IP: ' .$_SERVER['REMOTE_ADDR']; 

        $vizit['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $vizit['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

        Vizit::create($vizit);

        $posts = Post::orderBy('id', 'desc')->take(3)->get();

        return view('home', compact('posts'));
    }
}
