<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemachineItemRequest;
use App\Http\Requests\UpdatemachineItemRequest;
use App\Repositories\machineItemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class machineItemController extends Controller
{
    /** @var  machineItemRepository */
    private $machineItemRepository;

    public function __construct(machineItemRepository $machineItemRepo)
    {
        $this->machineItemRepository = $machineItemRepo;
    }

    /**
     * Display a listing of the machineItem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->machineItemRepository->pushCriteria(new RequestCriteria($request));
        $machineItems = $this->machineItemRepository->all();

        return view('machine_items.index')
            ->with('machineItems', $machineItems);
    }

    /**
     * Show the form for creating a new machineItem.
     *
     * @return Response
     */
    public function create()
    {
        return view('machine_items.create');
    }

    /**
     * Store a newly created machineItem in storage.
     *
     * @param CreatemachineItemRequest $request
     *
     * @return Response
     */
    public function store(CreatemachineItemRequest $request)
    {
        $input = $request->all();

        $machineItem = $this->machineItemRepository->create($input);

        Flash::success('Machine Item saved successfully.');

        return redirect(route('machineItems.index'));
    }

    /**
     * Display the specified machineItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $machineItem = $this->machineItemRepository->findWithoutFail($id);

        if (empty($machineItem)) {
            Flash::error('Machine Item not found');

            return redirect(route('machineItems.index'));
        }

        return view('machine_items.show')->with('machineItem', $machineItem);
    }

    /**
     * Show the form for editing the specified machineItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $machineItem = $this->machineItemRepository->findWithoutFail($id);

        if (empty($machineItem)) {
            Flash::error('Machine Item not found');

            return redirect(route('machineItems.index'));
        }

        return view('machine_items.edit')->with('machineItem', $machineItem);
    }

    /**
     * Update the specified machineItem in storage.
     *
     * @param  int              $id
     * @param UpdatemachineItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemachineItemRequest $request)
    {
        $machineItem = $this->machineItemRepository->findWithoutFail($id);

        if (empty($machineItem)) {
            Flash::error('Machine Item not found');

            return redirect(route('machineItems.index'));
        }

        $machineItem = $this->machineItemRepository->update($request->all(), $id);

        Flash::success('Machine Item updated successfully.');

        return redirect(route('machineItems.index'));
    }

    /**
     * Remove the specified machineItem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $machineItem = $this->machineItemRepository->findWithoutFail($id);

        if (empty($machineItem)) {
            Flash::error('Machine Item not found');

            return redirect(route('machineItems.index'));
        }

        $this->machineItemRepository->delete($id);

        Flash::success('Machine Item deleted successfully.');

        return redirect(route('machineItems.index'));
    }
}
