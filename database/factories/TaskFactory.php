<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class TaskFactory
 *
 * @author  <feras.bbm@gmail.com>
 * @package Database\Factories
 */
class TaskFactory extends Factory
{
    /**
     * @return array
     * @author <ferasbbm>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'user_id' => fake()->randomElement(User::query()->pluck('id')->toArray()),
        ];
    }
}
