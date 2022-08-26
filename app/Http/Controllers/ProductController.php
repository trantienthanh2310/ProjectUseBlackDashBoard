<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\Interface\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        // $products = $this->productRepository->getAll();
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function detail($id)
    {
        $products = Product::find($id);
        return view('product.detail',compact('products'));
    }
}
