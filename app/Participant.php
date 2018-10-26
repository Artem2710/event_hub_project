<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 07.10.2018
 * Time: 14:16
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Participant extends Model
{
    protected $fillable = [
        'user_id',
        'event_id',
    ];

    public static function participant(Event $event)
    {
        $event = Event::find($event->id);

        if (DB::table('event_user')->where('user_id', '=', Auth::id())->where('event_id', '=', $event->id)->exists()) {
            $event->users()->detach(Auth::id());
        } else {
            $event->users()->attach(Auth::id());
        }
    }
}