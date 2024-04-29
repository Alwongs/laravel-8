<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\SiteHelper;
use App\Models\Post;
use App\Models\Vizit;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VizitController;
use App\Functions\VizitHelper;

class HomeController extends Controller
{
    public function index() {

        VizitHelper::saveVizit($_SERVER);

        $posts = Post::orderBy('id', 'desc')->take(6)->get();

        return view('home', compact('posts'));
    }

    public function closeSite() {
        return view('maintenance');
    }
}
