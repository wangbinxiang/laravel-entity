<?php

namespace App\Modules\Member\Repositories;

use App\Modules\Member\Models\Member;
use App\Modules\Member\Transformers\MemberTransformer;

use App\System\Repositories\BaseModelRepositoryEloquent;

/**
 * Interface BaseModelRepository.
 *
 * @package namespace App\Repositories;
 */
class MemberRepository extends BaseModelRepositoryEloquent implements MemberRepositoryInterface
{

    protected function transformer()
    {
        return MemberTransformer::class;
    }

    public function model()
    {
        return Member::class;
    }
}
