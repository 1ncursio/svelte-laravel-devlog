<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory {
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
    public function definition() {
        $title = $this->faker->sentence(3);
        return [
            'title' => $title,
            'slug' => preg_replace('/\s/', '-', $title),
            'content' => $this->faker->paragraph(),
            'access_level' => 'public',
            'thumbnail' => $this->faker->imageUrl(320, 320),
        ];
    }
}
