<?php

namespace App\Http\Livewire\Ships;

use Livewire\Component;
use App\Models\Ship;

class ShipsCreate extends Component
{
    public $form = [
        'name' => '',
        'speed' => 0,
        'description' => '',
    ];

    protected $rules = [
        'form.name' => 'required|string',
        'form.speed' => 'required|numeric',
        'form.description' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.ships.ships-create');
    }

    public function create()
    {
        $this->validate();

        Ship::create([
            'name' => $this->form['name'],
            'speed' => $this->form['speed'],
            'description' => $this->form['description'],
        ]);

        $this->form = [
        'name' => '',
        'speed' => 0,
        'description' => '',
        ];

        session()->flash('success', 'A ship has been created!');

    }
}
