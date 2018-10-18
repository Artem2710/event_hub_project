<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\PostRequest;
use App\Http\Requests\TypeRequest;
use App\Participant;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class EventsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function index(Event $event)
//    {
//        $events = Event::all();
//        $participants = Participant::all();
//
//
//        $names = User::where('events.id', '=', $event->id)->join('events', function ($join) {
//            $join->on('events.user_id', '=', 'users.id');
//        })->pluck('name');
//
//
//        return view('eventsOnMap', [
//            'events' => $events,
//            'participants' => $participants,
//            'names' => $names,
//        ]);
//    }


    public function index(Event $event)
    {
//        $events = Event::get();
        $selectValue = Input::get('type');
        $events = DB::table('events')
            ->where('type', 'like', "$selectValue")
            ->get();

//        $names = User::where('events.id', '=', $event->id)->join('events', function ($join) {
//            $join->on('events.user_id', '=', 'users.id');
//        })->pluck('name');


        return view('eventsOnMap', [
            'events' => $events,
//            'names' => $names,
        ]);
    }

    public function events()
    {
        $events = Event::get();
        return response()->json($events);
    }


    /**
     * @param Event $event
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Event $event, User $user, Participant $participant)
    {
        $names = User::where('event_id', '=', $event->id)->join('participants', function ($join) {
            $join->on('users.id', '=', 'participants.user_id');
        })->pluck('name');

        return view('event', [
            'event' => $event,
            'names' => $names,
            'participant' => $participant,
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
