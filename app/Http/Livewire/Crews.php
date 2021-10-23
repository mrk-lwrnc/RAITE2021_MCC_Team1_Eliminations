<?php

namespace App\Http\Livewire;

use App\Models\Crew;
use Livewire\Component;

class Crews extends Component
{
    public function render()
    {
        // $crews = Crew::all();
        return view('livewire.crews');
    }
}
