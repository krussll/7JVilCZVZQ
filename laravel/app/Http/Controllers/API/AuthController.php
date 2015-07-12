<?php

namespace App\Http\Controllers\API;

use Auth;
use Input;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function Login()
    {
    	if(Auth::attempt(Input::only('email','password'))){
			return response()->json(true);
		}else{
			return response()->json(false);
		}
	}
		 
	public Function Logout(){
		Auth::logout();
		return response()->json(true);
	}
}

/*

		

		
		*/