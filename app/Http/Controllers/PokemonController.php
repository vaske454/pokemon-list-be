<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getPokemonList(Request $request): JsonResponse
    {
        $data = [
            'message' => 'Hello!',
        ];

        return response()->json($data);
    }
}
