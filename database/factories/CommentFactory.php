<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(0, 99999),
            'content' => $this->faker->paragraph(5),
            'published' => $this->faker->boolean(70),
            'post_id' => Post::inRandomOrder()->first()
        ];
    }
}
