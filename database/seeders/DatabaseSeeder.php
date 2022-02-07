<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Category::factory(6)->create();
        \App\Models\merchandise::factory(22)->create();
        
    }
}
