<?php

namespace App\Http\Controllers\API;

use Illuminate\Routing\Controller as BaseController;

//Define the required repositories
use App\Repositories\UsersRepository as UsersRepository;

class UsersController extends BaseController
{
    public function getLatestUsers()
    {
    	$rep = new UsersRepository();
    	return response()->json($rep->GetLatestUsers());
    }

    
}
