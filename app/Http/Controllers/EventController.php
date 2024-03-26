<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Functions\DateHelper;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('pages/admin/events/manage', compact('events'));
    }

    public function create(Request $request)
    {
        $return_url = $request->return_url;

        return view('pages/admin/events/update', compact('return_url'));
    }

    public function store(Request $request)
    {
        $data = $request->form_data;
        $data['user_id'] = Auth::user()->id;
        $data['timestamp'] = (new DateHelper())->dateToTimestamp($request->form_data['date']);
        unset($data['date']);
        Event::create($data);
        
        return redirect()->route($request->return_url);
    }

    public function show($id)
    {
        //
    }

    public function edit(Event $event)
    {
        return view('pages/admin/events/update', compact('event'));        
    }

    public function update(Request $request, Event $event)
    {
        $event->event = $request->form_data['event'];
        $event->description = $request->form_data['description'];
        $event->timestamp = (new DateHelper())->dateToTimestamp($request->form_data['date']);
        $event->type = $request->form_data['type'];
        unset($event->date);
        $event->update();

        return redirect()->route('events.edit', compact('event'));
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back()->with('info', 'Запись успешно удалена'); 
    }
}
