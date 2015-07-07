<?php
namespace App\Repositories;

use DB;
use App\Repositories\Interfaces\ UsersRepositoryInterface as UsersRepositoryInterface;

class UsersRepository implements UsersRepositoryInterface
{
	public function GetLatestUsers()
	{
		return DB::table('users')->get();
	}

	public function GetUserById($id)
	{
		return DB::table('users')->get($id);
	}
}