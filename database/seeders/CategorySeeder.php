<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->count(3)
            ->hasPosts(5)
            ->create();

        Category::factory()
            ->count(2)
            ->hasPosts(9)
            ->create();

        Category::factory()
            ->count(9)
            ->hasPosts(1)
            ->create();

    }
}
