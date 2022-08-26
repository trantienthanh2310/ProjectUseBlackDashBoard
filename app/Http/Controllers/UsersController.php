<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Repositories\EloquentRepository\UserRepository;
use App\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{
    protected $productRepo;

    public function __construct(UserRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function index()
    {
        $products = $this->productRepo->getAll();
        return response()->json($products, Response::HTTP_OK);
    }

    public function getPost()
    {
        $users = Users::find(1);
        return $users->manypost;
    }

    public function collection()
    {
        

    }

    public function store(Request $request)
    {
        $data = $request->all();

        //... Validation here

        $product = $this->productRepo->create($data);

        return view('home.products');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        //... Validation here

        $product = $this->productRepo->update($id, $data);

        return view('home.products');
    }

    public function destroy($id)
    {
        $this->productRepo->delete($id);
        
        return view('home.products');
    }
}