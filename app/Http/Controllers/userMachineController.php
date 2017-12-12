<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateuserMachineRequest;
use App\Http\Requests\UpdateuserMachineRequest;
use App\Repositories\userMachineRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class userMachineController extends Controller
{
    /** @var  userMachineRepository */
    private $userMachineRepository;

    public function __construct(userMachineRepository $userMachineRepo)
    {
        $this->userMachineRepository = $userMachineRepo;
    }

    /**
     * Display a listing of the userMachine.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userMachineRepository->pushCriteria(new RequestCriteria($request));
        $userMachines = $this->userMachineRepository->all();

        return view('user_machines.index')
            ->with('userMachines', $userMachines);
    }

    /**
     * Show the form for creating a new userMachine.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_machines.create');
    }

    /**
     * Store a newly created userMachine in storage.
     *
     * @param CreateuserMachineRequest $request
     *
     * @return Response
     */
    public function store(CreateuserMachineRequest $request)
    {
        $input = $request->all();

        $userMachine = $this->userMachineRepository->create($input);

        Flash::success('User Machine saved successfully.');

        return redirect(route('userMachines.index'));
    }

    /**
     * Display the specified userMachine.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userMachine = $this->userMachineRepository->findWithoutFail($id);

        if (empty($userMachine)) {
            Flash::error('User Machine not found');

            return redirect(route('userMachines.index'));
        }

        return view('user_machines.show')->with('userMachine', $userMachine);
    }

    /**
     * Show the form for editing the specified userMachine.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userMachine = $this->userMachineRepository->findWithoutFail($id);

        if (empty($userMachine)) {
            Flash::error('User Machine not found');

            return redirect(route('userMachines.index'));
        }

        return view('user_machines.edit')->with('userMachine', $userMachine);
    }

    /**
     * Update the specified userMachine in storage.
     *
     * @param  int              $id
     * @param UpdateuserMachineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateuserMachineRequest $request)
    {
        $userMachine = $this->userMachineRepository->findWithoutFail($id);

        if (empty($userMachine)) {
            Flash::error('User Machine not found');

            return redirect(route('userMachines.index'));
        }

        $userMachine = $this->userMachineRepository->update($request->all(), $id);

        Flash::success('User Machine updated successfully.');

        return redirect(route('userMachines.index'));
    }

    /**
     * Remove the specified userMachine from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userMachine = $this->userMachineRepository->findWithoutFail($id);

        if (empty($userMachine)) {
            Flash::error('User Machine not found');

            return redirect(route('userMachines.index'));
        }

        $this->userMachineRepository->delete($id);

        Flash::success('User Machine deleted successfully.');

        return redirect(route('userMachines.index'));
    }
}
