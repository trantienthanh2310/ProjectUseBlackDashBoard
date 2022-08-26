<?php
namespace App\Repositories\Interface;


interface ProductRepositoryInterface extends BaseRepositoryInterface
{
   public function getAll();

   public function index();
}