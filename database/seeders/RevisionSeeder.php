<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Revision;

class RevisionSeeder extends Seeder
{
    public function run()
    {
        Revision::factory()->count(50)->create();
    }
}

