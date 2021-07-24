<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'rank' => $this->faker->numberBetween(1, 6),
            'tribe' => $this->faker->randomElement([ 'None','All', 'Beast', 'Demon', 'Dragon', 'Elemental', 'Mech', 'Murloc', 'Pirate','Quillboar' ]),
            'health' => $this->faker->numberBetween(1,12),
            'attack' => $this->faker->numberBetween(1,9),
            'amtAvailable' => '100'
        ];
    }
}
