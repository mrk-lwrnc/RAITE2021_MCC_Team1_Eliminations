<?php

namespace App\Http\Livewire\Crews;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class CrewsIndex extends Component
{
    use WithPagination;

    public function render()
    {
        $crews = $this->crews->paginate(20);

        return view('livewire.crews.crews-index', compact('crews'));
    }

    public function getCrewsProperty()
    {
        return User::where('rank_id', '!=', 1)->with(['rank','ship']);
    }
}
