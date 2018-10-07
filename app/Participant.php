<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 07.10.2018
 * Time: 14:16
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'user_id',
        'event_id',
    ];
}