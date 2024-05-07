<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AlbumResource;
use App\Functions\SiteHelper;
use App\Models\Album;

class GalleryController extends Controller
{
    public function index()
    {
        $albums = Album::orderBy('created_at', 'desc')->paginate(6);

        return view('pages/site/gallery/albums', compact('albums'));
    }

    public function show($id)
    {
        $album = new AlbumResource(Album::with('photos')->findOrFail($id));       
        return view('pages/site/gallery/album', compact('album'));
    }

    public function showPhoto($id)
    {
        dd($id);
    }
}
