<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\SiteHelper;
use App\Models\User;

class ProfileController extends Controller
{
    public function show($id) {

        $user = User::find($id);
        return view('pages/site/profile', compact('user'));
    }

}
