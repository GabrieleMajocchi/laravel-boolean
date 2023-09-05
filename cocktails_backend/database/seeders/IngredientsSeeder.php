<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($ii = 1; $ii <= 12; $ii++) {
            $end = 50 * $ii;
            $start = $end - 49;
            for ($i = $start; $i <= $end; $i++) {
                $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
                $data = $response->json();

                if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                    $ingredient = $data['ingredients'][0];
                    $newIngredient = new Ingredient();
                    $newIngredient->name = $ingredient['strIngredient'];
                    $newIngredient->description = $ingredient['strDescription'];
                    $newIngredient->type = $ingredient['strType'];
                    $newIngredient->save();
                }
            }
        sleep(30);
        }
    }
}
