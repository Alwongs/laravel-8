<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Vizit;
use Illuminate\Support\Facades\Auth;
use ElFactory\IpApi\IpApi;

class HomeController extends Controller
{
    public function index() {

        if (!empty($_SERVER['REMOTE_ADDR'])) {
            $response = IpApi::default($_SERVER['REMOTE_ADDR'])->fields(['city', 'country'])->lang('ru')->lookup();
        }

        $vizit['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $vizit['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $vizit['city'] = !empty($response['city']) ? $response['city'] : "";
        $vizit['country'] = !empty($response['country']) ? $response['country'] : "";

        Vizit::create($vizit);


        $user_id = Auth::user() ? Auth::user()->id : 0;
        $user_timezone = Auth::user() && Auth::user()->timezone ? Auth::user()->timezone : 'timezone is undefined';


        $posts = Post::orderBy('id', 'desc')->take(3)->get();

        return view('home', compact('posts', 'user_id', 'user_timezone'));
    }
}
