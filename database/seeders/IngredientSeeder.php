<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $ingredient = new Ingredient();

        $ingredient->name = $faker->word();
        $ingredient->origin = $faker->word();

        // save data on table
        $ingredient->save();
    }
}
