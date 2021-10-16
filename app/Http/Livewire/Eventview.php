<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Event;
use App\Models\Place;

class Eventview extends Component
{
  public function render()
  {
    $myevent = Event::where('id', 1)->first();
    $user = User::where('id',$myevent['user_id'])->first();
    $place = Place::where('id',$myevent['place_id'])->first();
    $myevent['user_name'] = $user->name;
    $myevent['user_photo'] = $user->photo;
    $myevent['place'] = $place->place;

    return view('livewire.eventview')->with('data', $myevent);
  }
}
