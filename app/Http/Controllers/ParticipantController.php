<?php

namespace App\Http\Controllers;

use App\Event;
use App;
use Illuminate\Support\Facades\Redirect;

class ParticipantController extends Controller
{
    public function connectLeave(Event $event)
    {
        $participant = App\Participant::participant($event);
        return Redirect::back();
    }

//    public function test(Event $event)
//    {
//        $check = DB::table('event_user')->where('user_id', '=', Auth::id())->where('event_id', '=', $event->id)->exists();
//
//        return view('test', [
//            'check' => $check,
//        ]);
//    }
}
