<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\PostRequest;
use App\Participant;
use App\User;
use App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class EventsController extends Controller
{
    /**
     * @param Event $authors
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Event $authors)
    {
        $selectValue = Input::get('type');
        $events =  Event::where('type', 'like', "$selectValue")->where('dateTime', '>', NOW())
            ->get();
        return view('eventsOnMap')->with('events', $events);
    }

    /**
     * @param Event $event
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Event $event, Participant $participant)
    {
        $names = App\Event::view($event);
        $check = App\Participant::check($event);

        return view('event', [
            'event' => $event,
            'names' => $names,
            'participant' => $participant,
            'check' => $check,
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
