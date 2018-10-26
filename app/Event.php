<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 02.10.2018
 * Time: 14:42
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'type',
        'dateTime',
    ];


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
        $names = User::where('event_id', '=', $event->id)->join('event_user', function ($join) {
            $join->on('users.id', '=', 'event_user.user_id');
        })->pluck('name');
        return $names;
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
        return $this->belongsToMany('App\User', 'event_user',  'event_id', 'user_id');
    }
}