<?php

namespace App\System\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BaseModelRepository;
// use App\models\BaseModel;
// use App\Validators\BaseModelValidator;

/**
 * Class BaseModelRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
abstract class BaseModelRepositoryEloquent extends BaseRepository implements BaseModelRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    abstract public function model();
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
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
