<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $events = Event::all();
        return view('eventsOnMap', [
            'events' => $events,
        ]);
    }

    /**
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Event $event)
    {
        return view('event', [
            'event' => $event,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('eventCreate');
    }

    public function store(PostRequest $request)
    {
        $post = new Event();
        $post->fill($request->all() + [
                'user_id' => Auth::id(),
            ]);
        $post->save();
        return redirect(route('events.index'));
    }

    /**
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function update(Event $event)
    {
        $user = Auth::user();
        if (!$user->owns($event)) {
            return redirect(route('events.index'));
        }
        return view('edit', [
            'event' => $event,
        ]);
    }

    public function edit(PostRequest $request, Event $event)
    {
        $user = Auth::user();
        if (!$user->owns($event)) {
            abort(403);
        }
        $event->fill($request->all());
        $event->save();
        return redirect(route('events.index'));
    }
}
