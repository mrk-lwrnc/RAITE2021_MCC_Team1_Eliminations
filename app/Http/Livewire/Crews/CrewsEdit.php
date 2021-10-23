<?php

namespace App\Http\Livewire\Crews;

use Livewire\Component;
use App\Models\User;
use App\Models\UserRank;
use App\Models\Ship;

class CrewsEdit extends Component
{
    public $crew = [];
    public $ranks = [];
    public $ships = [];

    protected $rules = [
        'crew.name' => 'required|string',
        'crew.email' => 'required|string|email',
        'crew.rank' => 'required|integer|exists:user_ranks,id',
        'crew.ship' => 'required|integer|exists:ships,id',
    ];

    public function mount(User $id)
    {
        $this->crewModel = $id;

        $id->load('rank', 'ship');

        $this->ranks = UserRank::select('id', 'rank')
            ->where('id', '!=', 1)
            ->where('id', '!=', 2)->get()->toArray();

        $this->ships = Ship::select('id', 'name')->get()->toArray();

        $this->crew = [
            'name' => $id->name,
            'email' => $id->email,
            'rank' => $id->rank->id,
            'rank_name' => $id->rank->rank,
            'ship' => $id->ship->id,
            'ship_name' => $id->ship->name,
        ];
    }

    public function update()
    {
        $this->validate();

        // $ship = Ship::where('id', $this->crew['ship']);

        // if($ship)

        $crew = [
            'name' => $this->crew['name'],
            'email' => $this->crew['email'],
            'rank_id' => $this->crew['rank'],
            'ship_id' => $this->crew['ship'],
        ];

        $this->crewModel->update($crew);

        session()->flash('success', 'Crew successfully updated!');
    }

    public function render()
    {
        return view('livewire.crews.crews-edit');
    }
}
