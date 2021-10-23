<?php

namespace App\Http\Livewire;

use App\Models\Route;
use Livewire\Component;

class Routes extends Component
{
    public $confirmingRouteAdd = false;
    public $routeToAdd;

    protected $rules = [
        'routeToAdd.ship_id' => 'required|integer',
        'routeToAdd.origin_longtitude' => 'required|numeric',
        'routeToAdd.origin_latitude' => 'required|numeric',
        'routeToAdd.destination_longtitude' => 'required|numeric',
        'routeToAdd.destination_latitude' => 'required|numeric',
        'routeToAdd.price' => 'required|numeric',
        'routeToAdd.crews' => 'required|numeric'
    ];

    protected $validationAttributes = [
        'routeToAdd.ship_id' => 'routes\'s ship id',
        'routeToAdd.origin_longtitude' => 'routes\'s origin\'s longtitude',
        'routeToAdd.origin_latitude' => 'routes\'s origin\'s latitude',
        'routeToAdd.destination_longtitude' => 'routes\'s destination\'s longtitude',
        'routeToAdd.destination_latitude' => 'routes\'s destination\'s longtitude',
        'routeToAdd.price' => 'route\'s price',
        'routeToAdd.crews' => 'route\s number of crews'
    ];

    protected $listeners = [
        'set:distance' => 'setDistance'
    ];


    public function render()
    {
        $routes = Route::all();
        return view('livewire.routes', ['routes' => $routes]);
    }

    public function confirmRouteAdd()
    {
        $this->reset(['routeToAdd']);
        $this->confirmingRouteAdd = true;
    }

    public function setDistance($distance)
    {
        $this->routeToAdd->distance = $distance;
    }

    public function addRoute()
    {
        $this->validate([
            'routeToAdd.ship_id' => 'required|integer',
            'routeToAdd.origin_longtitude' => 'required|numeric',
            'routeToAdd.origin_latitude' => 'required|numeric',
            'routeToAdd.destination_longtitude' => 'required|numeric',
            'routeToAdd.destination_latitude' => 'required|numeric',
            'routeToAdd.price' => 'required|numeric',
            'routeToAdd.crews' => 'required|numeric'
        ]);

        dd($this->routeToAdd['distance']);

        Route::create([
            'ship_id' => $this->routeToAdd['ship_id'],
            'origin_longtitude' => $this->routeToAdd['origin_longtitude'],
            'origin_latitude' => $this->routeToAdd['origin_latitude'],
            'destination_longtitude' => $this->routeToAdd['destination_longtitude'],
            'destination_latitude' => $this->routeToAdd['destination_latitude'],
            'distance' => $this->routeToAdd['distance'],
            'eta' => '2021-10-23 05:14:10',
            'price' => $this->routeToAdd['price'],
            'crews' => $this->routeToAdd['crews'],
        ]);

        $this->confirmingRouteAdd = false;

        session()->flash('message', 'Route Added Successfully!');
    }
}
