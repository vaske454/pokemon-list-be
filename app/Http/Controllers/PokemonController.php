<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getPokemonList(Request $request): JsonResponse
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=20');
        $data = $response->json();

        $pokemonData = [];

        foreach ($data['results'] as $result) {
            $pokemonResponse = Http::get($result['url']);
            $pokemon = $pokemonResponse->json();

            // Get the requested data for each individual Pokémon
            $pokemonData[] = [
                'name' => $pokemon['name'],
                'id' => $pokemon['id'],
                'height' => $pokemon['height'],
                'weight' => $pokemon['weight'],
                'image_url' => $pokemon['sprites']['front_default'],
                'types' => $pokemon['types'],
            ];
        }

        return response()->json($pokemonData);
    }
}
