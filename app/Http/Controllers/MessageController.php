<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use App\Models\Vizit;
use ElFactory\IpApi\IpApi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VizitController;
use App\Http\Requests\Message\StoreRequest;

class MessageController extends Controller
{
    public function index() {

        $messages = Message::all();
        return view('pages/admin/users/messages', compact('messages'));
    }

    public function show($id) {

        $message = Message::find($id);

        return view('pages/admin/users/message', compact('message'));
    }

    public function create() {

        return view('pages/site/messages/update');
    }

    public function store(StoreRequest $request) {
        if ($request->validated()) {

            $message = $request->all();
            $message['user_id'] = Auth::user() ? Auth::user()->id : 0;
            if (!empty($server['REMOTE_ADDR'])) {
                $response = IpApi::default($_SERVER['REMOTE_ADDR'])->fields(['city', 'country'])->lang('ru')->lookup();
                $message['city'] = !empty($response['city']) ? $response['city'] : "";
                $message['country'] = !empty($response['country']) ? $response['country'] : "";
            }

            Message::create($message);
            
            return redirect()->route('home')->with('info', 'Mesage has been sent!'); 
        }
    }

    public function clear() {
        DB::table('messages')->truncate();
        session(['messageCount' => '']);
        return redirect()->route('messages')->with('info', 'table messages cleaned!'); 
    }
}
