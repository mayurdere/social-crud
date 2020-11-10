<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;
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
        return [
            'title' => $title,
            'description' => $this->faker->text,
            'likes' => $this->faker->unique()->randomNumber($nbDigits = 3),
            'slug' => Str::slug($title),
            'user_id' => User::factory()
        ];
    }
}
