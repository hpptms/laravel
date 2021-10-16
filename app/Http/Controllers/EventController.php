<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Event;
use App\Models\Place;

class EventController extends Controller
{
    /**
     * アプリケーションのすべてのユーザーを表示
     *
     * @return \Illuminate\Http\Response
     */
    public function show($page)
    {
        $int = $page;
        $myevent = Event::where('id', $int)->first();
        $user = User::where('id',$myevent['user_id'])->first();
        $place = Place::where('id',$myevent['place_id'])->first();
        $myevent['user_name'] = $user->name;
        $myevent['user_photo'] = $user->photo;
        $myevent['place'] = $place->place;
        return view('etc/event-view',['data' =>$myevent]);
    }

    public function change($page)
    {
        $int = $page;
        $myevent = Event::where('id', $int)->first();
        $user = User::where('id',$myevent['user_id'])->first();
        $place = Place::where('id',$myevent['place_id'])->first();
        $myevent['user_name'] = $user->name;
        $myevent['user_photo'] = $user->photo;
        $myevent['place'] = $place->place;
        $myevent['id'] = $page;
        return view('dashboard/event-change',['data' =>$myevent]);
    }
}
