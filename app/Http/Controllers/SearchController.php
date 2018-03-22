<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $request, User $user)
    {
        // Buscar un usuario basado en su nombre.
        if ($request->has('name')) {
            return $user->where('name', $request->input('name'))->get();
        }

        // Buscar un usuario basado en la empresa.
        if ($request->has('company')) {
            return $user->where('company', $request->input('company'))
                ->get();
        }

        // Buscar un usuario basado en la ciudad.
        if ($request->has('city')) {
            return $user->where('city', $request->input('city'))->get();
        }

        // Continua con toda la lista de los Filtros...

        // No se han proporcionado filtros,
        // así que devolvamos a todos los usuarios.
        // Esto es malo, deberíamos paginar en la realidad.
        return User::all();
    }
}
