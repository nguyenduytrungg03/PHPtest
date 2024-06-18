<?php
namespace App\Repositories;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Models\Base;


class BaseRepository implements BaseRepositoryInterface
{
        public function all(){
            return Base::all();
        }
}

