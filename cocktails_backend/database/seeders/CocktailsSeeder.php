<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class CocktailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/random.php');

            $data = $response->json();

            $drink = $data['drinks'][0];
            $newCocktail = new Cocktail();
            $newCocktail->name = $drink['strDrink'];
            $newCocktail->category = str_replace('/', '-', $drink['strCategory']);
            $newCocktail->alcoholic = $drink['strAlcoholic'];
            $newCocktail->glass = $drink['strGlass'];
            $newCocktail->instructions = $drink['strInstructions'];
            $newCocktail->image = $drink['strDrinkThumb'];
            $newCocktail->save();

            sleep(0.1);
        }
    }
}
