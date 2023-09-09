<?php

namespace App\Http\Controllers;

use App\Events\SendMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;


class SubscribeController extends Controller
{
    public function subscribed(){
        Event::dispatch(new SendMail(1));
        dd('User Subscribed');
    }
}
