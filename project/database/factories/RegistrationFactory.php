<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Registration;
use App\Models\User;
use App\Models\Event;

class RegistrationFactory extends Factory
{
    protected $model = Registration::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'event_id' => Event::inRandomOrder()->first()->id ?? Event::factory(),
        ];
    }
}
