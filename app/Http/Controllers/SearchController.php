<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $request, User $user)
    {
        // Crear una instancia de query
        $user = $user->newQuery();

        // Buscar el usuario basado en su nombre
        if ($request->has('name')) {
            $user->where('name', $request->get('name'));
        }

        // Buscar el usuario basado en su empresa
        if ($request->has('company')) {
            $user->where('company', $request->get('company'));
        }

        // Buscar el usuario basado en su ciudad
        if ($request->has('city')) {
            $user->where('city', $request->get('city'));
        }

        // Buscar el usuario basado en su ciudad
        if ($request->has('phone')) {
            $user->where('phone', $request->get('phone'));
        }

        // Continuar con toda la lista de filtros...

        // Obtener el resultado y retornarlo
        return $user->get();
    }
}
