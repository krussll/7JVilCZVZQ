<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\View;


class SearchController extends BaseController
{
    public function searchGuides($location)
    {
    	return \View::make('search.guides', array('location' => $location));
    }

    
}