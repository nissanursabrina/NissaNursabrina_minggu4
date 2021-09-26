<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $author = $this->faker->sentence;
        return [
            'title' => $title,
            'author' => $author,
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'content' => $this->faker->realText(),
            'draft' => random_int(0, 1),
        ];
    }
}
