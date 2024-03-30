<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Functions\DateHelper;
use App\Http\Requests\Event\StoreRequest;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('user_id', Auth::id())->orderBy('timestamp', 'ASC')->get();
        return view('pages/admin/events/manage', compact('events'));
    }

    public function create(Request $request)
    {
        $return_url = $request->return_url;
        return view('pages/admin/events/update', compact('return_url'));
    }

    public function store(StoreRequest $request)
    {
        if ($request->validated()) {

            if (!DateHelper::validateDate($request->date)) {
                return redirect()->back()->with('status', 'Not valid date!'); 
            }
    
            $event = $request->all();;
            $event['user_id'] = Auth::user()->id;
            $event['timestamp'] = (new DateHelper())->dateToTimestamp($request->date);
            unset($event['date']);
            
            Event::create($event);
    
            return redirect()->route($request->return_url);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(Event $event)
    {
        $return_url = 'events.edit';
        return view('pages/admin/events/update', compact('event', 'return_url'));        
    }

    public function update(Request $request, Event $event)
    {
        $event->event = $request->event;
        $event->description = $request->description;
        $event->timestamp = (new DateHelper())->dateToTimestamp($request->date);
        $event->type = $request->type;
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
