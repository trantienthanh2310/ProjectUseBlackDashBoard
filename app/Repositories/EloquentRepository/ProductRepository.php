<?php

namespace App\Repositories\EloquentRepository;

use App\Models\User;
use App\Repositories\EloquentRepository\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interface\ProductRepositoryInterface;


class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
   
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function index()
    {
        return view('product');
    }
    

}