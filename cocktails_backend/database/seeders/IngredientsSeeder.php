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
        for ($i = 1; $i <= 50; $i++) {
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
        for ($i = 51; $i <= 100; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 101; $i <= 150; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 151; $i <= 200; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 201; $i <= 250; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 251; $i <= 300; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 301; $i <= 350; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 351; $i <= 400; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 401; $i <= 450; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 451; $i <= 500; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 501; $i <= 550; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 551; $i <= 600; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
        sleep(30);
        for ($i = 601; $i <= 650; $i++) {
            $response = Http::withOptions(['verify' => false])->get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?iid=' . $i);
            $data = $response->json();

            if (isset($data['ingredients']) && !is_null($data['ingredients'])) {
                $ingredient = $data['ingredients'][0];
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient['strIngredient'];
                $newIngredient->description = $ingredient['strDescription'];
                $newIngredient->type = $ingredient['strType'];
                $newIngredient->save();
                sleep(0.2);
            }
        }
    }
}
