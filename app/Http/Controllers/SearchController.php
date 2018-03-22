<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $request, User $user)
    {
        // Buscar un usuario basado en su nombre
        if ($request->has('name')) {

            // Si el existe el parametro de la Ciudad buscar por la ciudad
            if ($request->has('city')) {

                // Buscar el usuario basado en el nombre y en la ciudad

                return $user->where('name', $request->input('name'))
                    ->where('city', $request->input('city'))
                    ->get();
            }

            return $user->where('name', $request->input('name'))->get();

        }
    }
}
