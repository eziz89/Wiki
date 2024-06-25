<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GroupMember;

class GroupMemberSeeder extends Seeder
{
    public function run()
    {
        GroupMember::factory()->count(30)->create();
    }
}

