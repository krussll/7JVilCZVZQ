<?php 

namespace App\Repositories\Interfaces;

interface GuidesRepositoryInterface
{
    public function GetAllGuides();

    public function GetGuidesByGeoLocationRef($locationRef);

    public function GetGuideById($id);
}