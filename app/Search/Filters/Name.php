<?php

namespace App\Search\Filters;

class Name
{
    public static function apply($builder, $value)
    {
        return $builder->where('name', $value);
    }
}
