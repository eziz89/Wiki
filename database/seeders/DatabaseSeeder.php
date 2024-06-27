<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ArticleSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            CommentSeeder::class,
            RevisionSeeder::class,
            LikeSeeder::class,
            GroupSeeder::class,
            GroupMemberSeeder::class,
        ]);
    }
}

