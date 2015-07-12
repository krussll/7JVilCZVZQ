<?php
namespace App\Repositories;

use DB;
use App\Repositories\Interfaces\GuidesRepositoryInterface as GuidesRepositoryInterface;

class GuidesRepository implements GuidesRepositoryInterface
{
	public function GetAllGuides()
	{
		return DB::table('guides')->get();
	}

	public function GetGuidesByGeoLocationRef($locationRef)
	{
		return  DB::table('guides')
            ->join('users', 'guides.user_id', '=', 'users.id')
            ->where('guides.geolocation_ref', '=', $locationRef)
            ->get();
	}

	public function GetGuideById($id)
	{
		return DB::table('guides')->get($id);
	}
}