<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Vizit;
use Illuminate\Support\Facades\Auth;

class VizitController extends Controller
{
    public function index() 
    {
        if (Auth::id() == 1) {
            $vizits = Vizit::paginate(10);;
            return view('pages/admin/users/vizits', compact('vizits'));
        }
        return redirect()->route('home');
    }

    public function show($id)
    {
        $vizit = Vizit::find($id);
        return view('pages/admin/users/vizit', compact('vizit'));
    }


    public function clear()
    {
        DB::table('vizits')->truncate();
        return redirect()->route('vizits')->with('info', 'table vizits cleaned!'); 
    }
}
