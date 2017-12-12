<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateuserWealthRequest;
use App\Http\Requests\UpdateuserWealthRequest;
use App\Repositories\userWealthRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class userWealthController extends Controller
{
    /** @var  userWealthRepository */
    private $userWealthRepository;

    public function __construct(userWealthRepository $userWealthRepo)
    {
        $this->userWealthRepository = $userWealthRepo;
    }

    /**
     * Display a listing of the userWealth.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userWealthRepository->pushCriteria(new RequestCriteria($request));
        $userWealths = $this->userWealthRepository->all();

        return view('user_wealths.index')
            ->with('userWealths', $userWealths);
    }

    /**
     * Show the form for creating a new userWealth.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_wealths.create');
    }

    /**
     * Store a newly created userWealth in storage.
     *
     * @param CreateuserWealthRequest $request
     *
     * @return Response
     */
    public function store(CreateuserWealthRequest $request)
    {
        $input = $request->all();

        $userWealth = $this->userWealthRepository->create($input);

        Flash::success('User Wealth saved successfully.');

        return redirect(route('userWealths.index'));
    }

    /**
     * Display the specified userWealth.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userWealth = $this->userWealthRepository->findWithoutFail($id);

        if (empty($userWealth)) {
            Flash::error('User Wealth not found');

            return redirect(route('userWealths.index'));
        }

        return view('user_wealths.show')->with('userWealth', $userWealth);
    }

    /**
     * Show the form for editing the specified userWealth.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userWealth = $this->userWealthRepository->findWithoutFail($id);

        if (empty($userWealth)) {
            Flash::error('User Wealth not found');

            return redirect(route('userWealths.index'));
        }

        return view('user_wealths.edit')->with('userWealth', $userWealth);
    }

    /**
     * Update the specified userWealth in storage.
     *
     * @param  int              $id
     * @param UpdateuserWealthRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateuserWealthRequest $request)
    {
        $userWealth = $this->userWealthRepository->findWithoutFail($id);

        if (empty($userWealth)) {
            Flash::error('User Wealth not found');

            return redirect(route('userWealths.index'));
        }

        $userWealth = $this->userWealthRepository->update($request->all(), $id);

        Flash::success('User Wealth updated successfully.');

        return redirect(route('userWealths.index'));
    }

    /**
     * Remove the specified userWealth from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userWealth = $this->userWealthRepository->findWithoutFail($id);

        if (empty($userWealth)) {
            Flash::error('User Wealth not found');

            return redirect(route('userWealths.index'));
        }

        $this->userWealthRepository->delete($id);

        Flash::success('User Wealth deleted successfully.');

        return redirect(route('userWealths.index'));
    }
}
