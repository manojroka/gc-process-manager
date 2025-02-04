<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Servers;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servers>
 */
class ServersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'host_name' => $this->faker->name,
            'username' => $this->faker->text(10),
            'password' => $this->faker->text(10),
            'server_port' => $this->faker->text(5),
        ];
    }
}
