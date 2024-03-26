<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Functions\EventHelper;

class DashboardController extends Controller
{
    public function index() {

        $events = Event::all();

        list($overdue, $today, $tomorrow, $in_week) = EventHelper::chunck_events_to_periods($events);

        dd($overdue);

        $this->pageData = [
            'page_title' => "Dashboard",
            'overdue' => $overdue,
            'today' => $today,
            'tomorrow' => $tomorrow,
            'in_week' => $in_week,            
        ]; 

        return view('dashboard', compact('events'));
    }
}
