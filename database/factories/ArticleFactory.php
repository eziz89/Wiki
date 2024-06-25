<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => fake()->sentence,
            'content' => fake()->paragraphs(3, true),
            'user_id' => User::factory(),
        ];
    }
}
