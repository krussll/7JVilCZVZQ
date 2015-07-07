<?php 

namespace App\Repositories\Interfaces;

interface UsersRepositoryInterface
{
    public function GetLatestUsers();

    public function GetUserById($id);
}