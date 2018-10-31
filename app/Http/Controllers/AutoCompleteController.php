<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 30.10.2018
 * Time: 22:41
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\DB;

class AutoCompleteController extends Controller
{
    //
    public function gmaps()
    {
        $locations = DB::table('location')->get();
        return view('eventsOnMap',compact('locations'));
    }
}