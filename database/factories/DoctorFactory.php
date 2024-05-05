<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'specialist' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'photo' => $this->faker->imageUrl(),
            'address' => $this->faker->address(),
            'sip' => $this->faker->numberBetween(1000, 9999),
            'id_ihs' => $this->faker->numerify('#########'),
            'nik' => $this->faker->numerify('##############'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'birth_date' => $this->faker->date(),
        ];
    }
}
