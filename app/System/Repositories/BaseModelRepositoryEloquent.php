<?php

namespace App\System\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

use App\System\Transformers\BaseTransformer;

use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class BaseModelRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
abstract class BaseModelRepositoryEloquent extends BaseRepository implements BaseModelRepositoryInterface
{

    /**
     * 转换器
     *
     * @var BaseTransformer
     */
    protected $transformer;

    abstract protected function transformer();

    /**
     * @return Model
     * @throws RepositoryException
     */
    protected function makeTransformer()
    {
        $transformer = $this->app->make($this->transformer());

        if (!$transformer instanceof BaseTransformer) {
            throw new Exception("Class {$this->transformer()} must be an instance of App\System\\Transformers\\BaseTransformer");
        }

        return $this->transformer = $transformer;
    }


    /**
     * Specify Model class name
     *
     * @return string
     */
    // abstract public function model();
    // {
    //     return BaseModel::class;
    // }

    // /**
    //  * Specify Validator class name
    //  *
    //  * @return mixed
    //  */
    // abstract public function validator();
    // // {

    // //     return BaseModelValidator::class;
    // // }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->makeTransformer();
    }


    /**
     * firstOrNew
     * firstOrCreate
     * create
     * update
     * updateOrCreate
     * delete
     * deleteWhere
     *  字段映射
     */


    /**
     * Wrapper result data
     *
     * @param mixed $result
     *
     * @return mixed
     */
    public function parserResult($result)
    {
        // 需要转换器转换成 entity
        if ($result instanceof Collection || $result instanceof LengthAwarePaginator) {
            foreach ($result as $key => $model) {
                $result[$key] = $this->transformer->toEntity($model);
            }
            // $result->each(function ($model) {
            //     // 调用转换器
            //     return $this->transformer->toEntity($model);
            // });
            // dd($result);
        } elseif ($result instanceof Model) {
            // 调用转换器
            $result =  $this->transformer->toEntity($result);
        }

        return $result;
    }
}
