<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unix_id' => Str::uuid(),
            'username' => fake()->unique()->userName(),
            'password' => static::$password ??= Hash::make('password'), // Default password
            'role' => fake()->randomElement(['ADMIN', 'USER']), // Random role
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => null,
            'updated_by' => null,
        ];
    }

    /**
     * Set the user as an admin.
     */
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'ADMIN',
        ]);
    }

    /**
     * Set the user as a regular user.
     */
    public function user(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'USER',
        ]);
    }
}
