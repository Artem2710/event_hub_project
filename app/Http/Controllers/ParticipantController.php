<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\ParticipantRequest;
use App\Participant;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ParticipantController extends Controller
{
    public function store(ParticipantRequest $request, Event $event, User $names)
    {
        $post = new Participant();
        $post->fill($request->all() + [
                'user_id' => Auth::id(),
            ]);
        $post->save();
        return Redirect::back();
    }

    public function delete(Event $event, User $names)
    {
        DB::table('participants')->where('event_id', '=', $event->id)->where('user_id', '=', Auth::id())->delete();
        return Redirect::back();
    }
}
