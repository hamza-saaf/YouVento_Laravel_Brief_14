<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Club;

class ClubFactory extends Factory
{
    protected $model = Club::class;
    /**
     * Define the model's default state.
     
     *
     * @return array
     */

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->sentence(),
            'category' => $this->faker->randomElement(['Tech', 'Design', 'Robotique']),
            'logo' => 'logos/default.png',
        ];
    }
}
