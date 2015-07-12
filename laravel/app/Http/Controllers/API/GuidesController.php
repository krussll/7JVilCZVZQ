<?php

namespace App\Http\Controllers\API;

use Illuminate\Routing\Controller as BaseController;

//Define the required repositories
use App\Repositories\GuidesRepository as GuidesRepository;

class GuidesController extends BaseController
{
    public function getGuidesByLocation()
    {
    	$location = \Input::get('location');
    	
    	$rep = new GuidesRepository();

    	return response()->json($rep->GetGuidesByGeoLocationRef($location));
    }

    
}
