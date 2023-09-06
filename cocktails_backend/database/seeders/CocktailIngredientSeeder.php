<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CocktailIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = Cocktail::all();

        foreach($cocktails as $cocktail){
            $response = Http::withOptions(['verify' => false])->get('www.thecocktaildb.com/api/json/v1/1/search.php?s=' . $cocktail['name']);
            for($i = 1; $i <= 15; $i++){
                if(!is_null($response['drinks'][0]['strIngredient' . $i])){
                    $ingredient = Ingredient::where('name', '=', $response['drinks'][0]['strIngredient' . $i])->get();
                    $ingredientArray = $ingredient->toArray();
                        if (!empty($ingredientArray)) {
                            $cocktail->ingredients()->attach($ingredientArray[0]['id']);
                        }
                }
            }
        }
    }
}
