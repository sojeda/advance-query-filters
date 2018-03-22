<?php

namespace App\Search;

use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserSearch
{
    public static function apply(Request $filters)
    {
        $query = (new User)->newQuery();

        $query = static::applyFiltersToQuery($filters, $query);

        return $query->get();
    }

    private static function applyFiltersToQuery(Request $filters, Builder $query)
    {
        foreach ($filters->all() as $filterName => $value) {

            $decorator =
                __NAMESPACE__ . '\\Filters\\' .
                str_replace(' ', '', ucwords(
                    str_replace('_', ' ', $filterName)));

            if (class_exists($decorator)) {
                $query = $decorator::apply($query, $value);
            }

        }

        return $query;
    }
}
