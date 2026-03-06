<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Delegate;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delegate>
 */
class DelegateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\App\Models\Delegate>
     */
    protected $model = Delegate::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $delegateTypes = ['attendee', 'speaker', 'sponsor', 'partner'];
        $delegateType = fake()->randomElement($delegateTypes);

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'organization' => fake()->optional(0.8)->company(),
            'role' => fake()->optional(0.7)->jobTitle(),
            'country' => fake()->optional(0.6)->country(),
            'bio' => fake()->optional(0.5)->paragraph(2),
            'photo' => null,
            'linkedin_url' => fake()->optional(0.4)->url(),
            'twitter_url' => fake()->optional(0.3)->url(),
            'website_url' => fake()->optional(0.3)->url(),
            'delegate_type' => $delegateType,
            'is_published' => fake()->boolean(80),
            'order' => fake()->numberBetween(0, 100),
            'registered_at' => fake()->optional(0.7)->dateTimeBetween('-1 year', 'now'),
        ];
    }

    /**
     * Indicate that the delegate is a speaker.
     */
    public function speaker(): static
    {
        return $this->state(fn (array $attributes) => [
            'delegate_type' => 'speaker',
            'is_published' => true,
        ]);
    }

    /**
     * Indicate that the delegate is a sponsor.
     */
    public function sponsor(): static
    {
        return $this->state(fn (array $attributes) => [
            'delegate_type' => 'sponsor',
            'is_published' => true,
        ]);
    }

    /**
     * Indicate that the delegate is a partner.
     */
    public function partner(): static
    {
        return $this->state(fn (array $attributes) => [
            'delegate_type' => 'partner',
            'is_published' => true,
        ]);
    }

    /**
     * Indicate that the delegate is an attendee.
     */
    public function attendee(): static
    {
        return $this->state(fn (array $attributes) => [
            'delegate_type' => 'attendee',
        ]);
    }

    /**
     * Indicate that the delegate is published.
     */
    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
        ]);
    }

    /**
     * Indicate that the delegate is unpublished.
     */
    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => false,
        ]);
    }
}
