<?php

namespace App\Search;

use App\User;
use Illuminate\Http\Request;

class UserSearch
{
    public static function apply(Request $filters)
    {
        $query = (new User)->newQuery();

        $query = static::applyFiltersToQuery($filters, $query);

        return $query->get();
    }
}
