<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Post;
use App\Models\PostCategory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->sentence(6),
            'content' => $this->faker->paragraph(5),
            'published' => $this->faker->boolean(70),
            'post_category_id' => PostCategory::inRandomOrder()->first(),
            'admin_id' => Admin::inRandomOrder()->first()
        ];
    }
}
