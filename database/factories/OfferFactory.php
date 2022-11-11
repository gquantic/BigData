<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::query()->inRandomOrder()->first()->id,
            'title' => fake()->domainName(),
            'description' => fake()->text(256),
            'geo' => ['ru', 'en', 'eu', 'kz'],
            'blocked_socials' => ['google', 'adwords', 'instagram'],
            'costs' => ['conversion', 'buy', 'registration'],
            'cost_amount' => round(rand(111, 1000), -1),
        ];
    }
}
