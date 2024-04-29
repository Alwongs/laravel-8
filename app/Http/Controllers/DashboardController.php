<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Message;
use App\Models\User;
use App\Models\Vizit;
use App\Functions\EventHelper;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VizitController;
use App\Functions\VizitHelper;

class DashboardController extends Controller
{
    public function index()
    {
        VizitHelper::saveVizit($_SERVER);

        $messageCount = Message::count();
        $userCount = User::count();
        $vizitCount = Vizit::count();

        session([
            'messageCount' => $messageCount,
            'userCount'    => $userCount,
            'vizitCount'    => $vizitCount,
        ]);

        $events = Event::where('user_id', Auth::id())->get();
        list($overdue, $today, $tomorrow, $in_week) = EventHelper::chunckEventsToPeriods($events); 

        return view('dashboard', compact('events', 'overdue', 'today', 'tomorrow', 'in_week'));
    }

    public function postpone($id)
    {
        $event = Event::find($id);

        if ($event->type == 'M') {
            $new_timestamp = strtotime('+1 month', $event->timestamp);
        } 

        if ($event->type == 'A') {
            $new_timestamp = strtotime('+1 year', $event->timestamp);
        } 

        $event->timestamp = $new_timestamp;

        $event->update();   
        
        return redirect()->route('dashboard');
    }
}
