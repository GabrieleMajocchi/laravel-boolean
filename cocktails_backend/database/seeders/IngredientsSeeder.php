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
        $response = Http::withOptions(['verify' => false])->get('www.thecocktaildb.com/api/json/v1/1/list.php?i=list');
        $data = $response->json();

        foreach($data['drinks'] as $ingredient){
            $newIngredient = new Ingredient();
            $newIngredient->name = $ingredient['strDrink'];
            $newIngredient->save();
        }
    }
}
