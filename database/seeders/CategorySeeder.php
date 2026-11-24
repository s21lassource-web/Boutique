<?php

namespace Database\Seeders;



use App\Models\Category;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //genere 8 categories aléatoires
      Category::factory(8)->create();
    }
}
