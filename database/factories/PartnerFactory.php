<?php

namespace Database\Factories;

use App\Models\Partner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Ensure UserFactory exists
            'partnership_restaurant' => $this->faker->company,
            'partnership_duration' => $this->faker->randomElement(['1 year', '2 years', '3 years']),
            'partnership_address' => $this->faker->address,
        ];
    }
}
