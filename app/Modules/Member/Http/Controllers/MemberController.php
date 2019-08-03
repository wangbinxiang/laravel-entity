<?php

namespace App\Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Illuminate\Routing\Controller;

use App\System\Controllers\Controller;
use App\Modules\Member\Services\MemberServiceInterface;

class MemberController extends Controller
{


    public function __construct(MemberServiceInterface $memberService)
    {
        $this->service = $memberService;
    }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        // $member = $this->service->member('1');
        // var_dump($member->getId());
        // var_dump($member->getCellphone());
        // var_dump($member->getPassword());
        // var_dump($member->getRememberToken());
        // var_dump($member->getCreateTime());
        // var_dump($member->getUpdateTime());
        $members = $this->service->search();
        dd($members);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('member::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('member::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('member::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
