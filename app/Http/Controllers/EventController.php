<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('pages/admin/events/manage', compact('events'));
    }

    public function create()
    {
        return view('pages/admin/events/update');
    }

    public function store(Request $request)
    {
        $day = $request->form_data['date']['day'];
        $month = $request->form_data['date']['month'];
        $year = $request->form_data['date']['year'];
        $timestamp = strtotime("$month/$day/$year");

        $data = new Event();
        $data = $request->form_data;
        $data['user_id'] = Auth::user()->id;
        $data['timestamp'] = $timestamp;
        unset($data['date']);

        Event::create($data);
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        // $event = Event::find($id);
        return view('pages/admin/events/update', compact('event'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {

        $event->delete();
        return redirect()->back()->with('info', 'Запись успешно удалена'); 
    }
}
