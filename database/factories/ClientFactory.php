<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company();
        $slug = \Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'status' => $this->faker->randomElement(['active', 'closed', 'prospect']),
            'address' => $this->faker->address(),
            'city'    => $this->faker->city(),
            'state'   => $this->faker->country(),
            'zip_code' => $this->faker->postcode(),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
