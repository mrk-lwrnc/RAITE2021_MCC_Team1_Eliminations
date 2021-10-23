<?php

namespace App\Http\Livewire\Ships;

use Livewire\Component;
use App\Models\Ship;

class ShipsIndex extends Component
{
    public $ships;

    public function mount()
    {
        $this->ships = Ship::with(['users' => function($query) {
            $query->with('rank');
        }])
        ->where('id', '!=', 1)
        ->get();
    }

    public function render()
    {
        return view('livewire.ships.ships-index');
    }
}
