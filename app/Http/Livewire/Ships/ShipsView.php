<?php

namespace App\Http\Livewire\Ships;

use Livewire\Component;
use App\Models\Ship;
use App\Models\UserRank;

class ShipsView extends Component
{
    public $ship;
    public $ranks;

    public function mount($id)
    {
        $this->ship = Ship::where('id', $id)->with('users.rank')->first();

        $this->ranks = UserRank::select('id', 'rank')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.ships.ships-view');
    }
}
