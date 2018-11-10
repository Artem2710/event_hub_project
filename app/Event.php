<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 02.10.2018
 * Time: 14:42
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;


class Event extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'type',
        'dateTime',
        'latitude',
        'longitude',
        'house',
        'street',
        'city',
        'country',
    ];

    /**
     * @return mixed
     */
    public static function getAllEvents()
    {
        $selectValue = Input::get('type');

        if (!empty ($selectValue)) {
            $events = Event::where('type', 'like', "$selectValue")->where('dateTime', '>', NOW())
                ->get();
        } else {
            $events = Event::where('dateTime', '>', NOW())
                ->get();
        }
        return $events;
    }

    /**
     * @return mixed
     */
    public function getEventerUsername()
    {
        return User::where('id', $this->user_id)->first()->name;
    }

    /**
     * @param Event $event
     * @return mixed
     */
    public static function view(Event $event)
    {
        $participantNames = User::where('event_id', '=', $event->id)->join('event_user', function ($join) {
            $join->on('users.id', '=', 'event_user.user_id');
        })->pluck('name');
        return $participantNames;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'event_user', 'event_id', 'user_id');
    }
}