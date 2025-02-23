<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;
use App\Models\Club;

class EventFactory extends Factory
{
    protected $model = Event::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'date' => $this->faker->dateTimeBetween('+1 week', '+3 months'),
            'location' => $this->faker->city(),
            'max_capacity' => $this->faker->numberBetween(10, 100),
            'club_id' => Club::inRandomOrder()->first()->id ?? Club::factory(), // Random club
        ];
    }
}
