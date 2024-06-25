<?php

namespace Database\Factories;

use App\Models\GroupMember;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupMemberFactory extends Factory
{
    protected $model = GroupMember::class;

    public function definition()
    {
        return [
            'group_id' => Group::factory(),
            'user_id' => User::factory(),
        ];
    }
}
