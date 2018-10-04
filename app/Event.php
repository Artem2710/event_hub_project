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
        'title',
        'description',
    ];
}