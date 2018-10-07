<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\PostRequest;
use App\Participant;
use App\User;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $events = Event::all();
        $participants = Participant::all();
        return view('eventsOnMap', [
            'events' => $events,
            'participants' => $participants,

        ]);
    }

    /**
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Event $event, User $user)
    {
        $names = User::where('event_id', '=', 1)->join('participants', function ($join) {
            $join->on('users.id', '=', 'participants.user_id');
        })->pluck('name');

        return view('event', [
            'event' => $event,
            'names'=>$names,
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
