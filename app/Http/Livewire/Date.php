<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use Carbon\Carbon;

class Date extends Component
{
    public function render()
    {
        $now = new Carbon('today','Asia/Tokyo');
        $now = $now->format('20y-m-d');

        $myevent = Event::where('date', '>', $now)->get();
        return view('livewire.date')->with('events', $myevent);
    }
}
