<?php

namespace Database\Factories;

use App\Models\Revision;
use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RevisionFactory extends Factory
{
    protected $model = Revision::class;

    public function definition()
    {
        return [
            'content' => fake()->paragraphs(3, true),
            'article_id' => Article::factory(),
            'user_id' => User::factory(),
        ];
    }
}

