<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    protected function show()
    {
        return view('eventsOnMap');
    }
}
