<?php

namespace App\Search\Filters;

class City
{
    public static function apply($builder, $value)
    {
        return $builder->where('city', $value);
    }
}
