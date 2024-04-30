<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\SiteHelper;
use App\Models\Post;

class GalleryController extends Controller
{
    public function index() {

        return view('pages/site/gallery');
    }

}
