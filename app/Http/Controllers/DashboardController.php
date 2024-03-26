<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Functions\EventHelper;

class DashboardController extends Controller
{
    public function index() {

        $events = Event::all();

        list($overdue, $today, $tomorrow, $in_week) = EventHelper::chunckEventsToPeriods($events); 

        return view('dashboard', compact('events', 'overdue', 'today', 'tomorrow', 'in_week'));
    }

    public function postpone($id) {

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
