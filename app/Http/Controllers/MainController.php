<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 26.09.2018
 * Time: 22:41
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    protected function show()
    {
        return view('main');
    }
}