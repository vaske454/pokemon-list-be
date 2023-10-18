<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getPokemonList(Request $request): JsonResponse
    {

        $paged = $_GET['paged'];

        $perPage = 20;

        $currentPage = $request->input('page', $paged);

        $offset = ($currentPage - 1) * $perPage;

        $pokemons = Pokemon::skip($offset)->take($perPage)->get();

        $total = Pokemon::count();

        $response = [
            'pokemons' => $pokemons,
            'current_page' => $currentPage,
            'total' => $total,
        ];

        return response()->json($response);
    }
}
