<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => ucfirst(join(' ', $this->faker->words(4))),
            'content' => join('.', $this->faker->sentences(20)),
            'category_id' => rand(1, 9),
            'user_id' => 1,
        ];
    }
}
