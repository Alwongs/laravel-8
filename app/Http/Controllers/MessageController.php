<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\SiteHelper;
use App\Models\Post;
use App\Models\Vizit;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VizitController;
use App\Functions\VizitHelper;

class MessageController extends Controller
{
    public function create() {

        return view('pages/site/messages/update');
    }
}
