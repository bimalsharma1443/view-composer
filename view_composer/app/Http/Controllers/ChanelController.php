<?php

namespace App\Http\Controllers;

use App\chanel;
use Illuminate\Http\Request;

class ChanelController extends Controller
{

    function index()
    {
       // $channel = chanel::get();
        return view('channel.index'/*,compact('channel')*/);

    }

    function add() {
        //$channel = chanel::get();
        return view('channel.add'/*,compact('channel')*/);
    }

}
