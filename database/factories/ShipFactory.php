<?php

namespace Database\Factories;

use App\Models\Ship;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'speed' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 750.00, $max = 1000.00),
            'description' => $this->faker->text(50),
        ];
    }
}
