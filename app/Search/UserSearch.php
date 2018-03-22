<?php

namespace App\Search;

use App\Search\Filters\City;
use App\Search\Filters\Name;
use App\User;
use Illuminate\Http\Request;

class UserSearch
{
    public static function apply(Request $filters)
    {
        $query = (new User)->newQuery();

        // Search for a user based on their name.
        if ($filters->has('name')) {
            $query = Name::apply($query, $filters->input('name'));
        }

        // Search for a user based on their city.
        if ($filters->has('city')) {
            $query = City::apply($query, $filters->input('city'));
        }

        return $query->get();
    }
}
