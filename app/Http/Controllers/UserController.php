<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Vizit;
use ElFactory\IpApi\IpApi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VizitController;
use App\Http\Requests\Message\StoreRequest;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
        return view('pages/admin/users/manage', compact('users'));
    }
}
