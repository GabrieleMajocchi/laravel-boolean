<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{
    public function index(){
        $cocktails = Cocktail::with('ingredients')->paginate(5);

        return response()->json(
            $cocktails,
        );
    }

    public function show(String $id){
        $cocktail = Cocktail::with('ingredients')->findOrFail($id);
        return response()->json(
            $cocktail,
        );
    }
}
