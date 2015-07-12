<?php

namespace App\Http\Controllers\API;
use App\User;
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

	public function createUser()
    {
        $user = User::create([
            'username' => \Input::get('username'),
            'firstname' => \Input::get('firstname'),
            'surname' => \Input::get('surname'),
            'email' => \Input::get('email'),
            'password' => bcrypt(\Input::get('password')),
        ]);


    	return response()->json($user);
    }    
}
