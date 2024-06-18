<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ProvinceRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Province;


class ProvinceRepository implements ProvinceRepositoryInterface
{
        public function all(){
            return Province::all();
        }
}

