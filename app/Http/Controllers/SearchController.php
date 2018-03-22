<?php

namespace App\Http\Controllers;

use App\Search\UserSearch;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $filters)
    {
        return UserSearch::apply($filters);
    }
}
