<?php   

namespace App\Repositories\EloquentRepository;

use App\Repositories\Interface\EloquentRepositoryInterface;
use App\Repositories\Interface\UserRepositoryInterface;
use App\Repositories\Interface\PostRepositoryInterface;
use App\Repositories\Interface\ProductRepositoryInterface;
use App\Repositories\Interface\BaseRepositoryInterface;



use Illuminate\Database\Eloquent\Model;   

class BaseRepository implements BaseRepositoryInterface
{
    //model muốn tương tác
    protected $model;

   //khởi tạo

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    //lấy model tương ứng
    /**
     * Set model
     */


    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        $result = $this->model->find($id);

        return $result;
    }

    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function update($id, $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }
}