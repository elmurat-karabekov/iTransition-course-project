<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Config;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'description' => json_encode(fake()->realText()),
            'topic_id' => fake()->randomElement(Topic::pluck('id')->toArray()),
            'img_path' => fake()->randomElement(Config::get('constants.fake_img_paths'))
        ];
    }
}
