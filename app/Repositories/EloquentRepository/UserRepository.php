<?php

namespace App\Repositories\EloquentRepository;

use App\Models\User;
use App\Models\Users;
use App\Repositories\EloquentRepository\BaseRepository;

use App\Repositories\Interface\UserRepositoryInterface;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function getUser()
    {
        return $this->model->select('name','password','email')->take(5)->get();
    }

    
}