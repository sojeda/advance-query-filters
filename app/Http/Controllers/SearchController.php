<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use UserSearch;

class SearchController extends Controller
{
    public function filter(Request $filters)
    {
        return UserSearch::apply($filters);
    }
}
