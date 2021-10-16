<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class makes extends Component
{

    public function render()
    {
        $user_id = Auth::id();
        $myevent = Event::where('user_id', $user_id)->get();
        return view('livewire.makes')->with('events', $myevent);
    }
}
