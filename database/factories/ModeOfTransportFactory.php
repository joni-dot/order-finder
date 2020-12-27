<?php

namespace Database\Factories;

use App\Models\ModeOfTransport;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModeOfTransportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModeOfTransport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween($min = 1000, $max = 50000),
            'price_vat' => $this->faker->numberBetween($min = 1000, $max = 50000),
        ];
    }
}
