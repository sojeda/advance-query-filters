<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $filters)
    {
        // Crear una instancia de query (Sacar llamado estatico) -> User::query()
        $user = (new User())->newQuery();

        // Eager Loading
        $user->with('flight');

        // Buscar el usuario basado en su nombre
        if ($filters->has('name')) {
            $user->where('name', $filters->get('name'));
        }

        // Buscar el usuario basado en su empresa
        if ($filters->has('company')) {
            $user->where('company', $filters->get('company'));
        }

        // Buscar el usuario basado en su ciudad
        if ($filters->has('city')) {
            $user->where('city', $filters->get('city'));
        }

        // Buscar el usuario basado en su telefono
        if ($filters->has('phone')) {
            $user->where('phone', $filters->get('phone'));
        }

        // Buscar usuario cuyo basado en un codigo de vuelo
        if ($filters->has('code')) {
            $user->whereHas('flight', function ($query) use ($filters) {
                $query->where('code', $filters->get('code'));
            });
        }

        // Continuar con toda la lista de filtros...

        // Obtener el resultado y retornarlo
        return $user->get();
    }
}
