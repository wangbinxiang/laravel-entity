<?php

namespace App\Modules\Member\Services;

use App\System\Services\BaseService;

use App\Modules\Member\Entities\Member;
use App\Modules\Member\Repositories\MemberRepositoryInterface;

class MemberService extends BaseService implements MemberServiceInterface
{

    public function __construct(MemberRepositoryInterface $memberRepository)
    {
        $this->repository = $memberRepository;
    }



    public function member(string $id): Member
    {
        return $this->repository->find($id);
    }


    public function search()
    {
        return $this->repository->paginate(10);
    }
}
