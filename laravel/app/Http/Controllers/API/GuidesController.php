<?php

namespace App\Http\Controllers\API;

use Illuminate\Routing\Controller as BaseController;

//Define the required repositories
use App\Repositories\UsersRepository as UsersRepository;

class GuidesController extends BaseController
{
    public function getGuidesByLocation()
    {
    	$location = \Input::get('location');
    	
    	$rep = new UsersRepository();

    	return response()->json($rep->GetLatestUsers());
    }

    
}
