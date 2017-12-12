<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecoinItemRequest;
use App\Http\Requests\UpdatecoinItemRequest;
use App\Repositories\coinItemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class coinItemController extends Controller
{
    /** @var  coinItemRepository */
    private $coinItemRepository;

    public function __construct(coinItemRepository $coinItemRepo)
    {
        $this->coinItemRepository = $coinItemRepo;
    }

    /**
     * Display a listing of the coinItem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->coinItemRepository->pushCriteria(new RequestCriteria($request));
        $coinItems = $this->coinItemRepository->all();

        return view('coin_items.index')
            ->with('coinItems', $coinItems);
    }

    /**
     * Show the form for creating a new coinItem.
     *
     * @return Response
     */
    public function create()
    {
        return view('coin_items.create');
    }

    /**
     * Store a newly created coinItem in storage.
     *
     * @param CreatecoinItemRequest $request
     *
     * @return Response
     */
    public function store(CreatecoinItemRequest $request)
    {
        $input = $request->all();

        $coinItem = $this->coinItemRepository->create($input);

        Flash::success('Coin Item saved successfully.');

        return redirect(route('coinItems.index'));
    }

    /**
     * Display the specified coinItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coinItem = $this->coinItemRepository->findWithoutFail($id);

        if (empty($coinItem)) {
            Flash::error('Coin Item not found');

            return redirect(route('coinItems.index'));
        }

        return view('coin_items.show')->with('coinItem', $coinItem);
    }

    /**
     * Show the form for editing the specified coinItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coinItem = $this->coinItemRepository->findWithoutFail($id);

        if (empty($coinItem)) {
            Flash::error('Coin Item not found');

            return redirect(route('coinItems.index'));
        }

        return view('coin_items.edit')->with('coinItem', $coinItem);
    }

    /**
     * Update the specified coinItem in storage.
     *
     * @param  int              $id
     * @param UpdatecoinItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecoinItemRequest $request)
    {
        $coinItem = $this->coinItemRepository->findWithoutFail($id);

        if (empty($coinItem)) {
            Flash::error('Coin Item not found');

            return redirect(route('coinItems.index'));
        }

        $coinItem = $this->coinItemRepository->update($request->all(), $id);

        Flash::success('Coin Item updated successfully.');

        return redirect(route('coinItems.index'));
    }

    /**
     * Remove the specified coinItem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coinItem = $this->coinItemRepository->findWithoutFail($id);

        if (empty($coinItem)) {
            Flash::error('Coin Item not found');

            return redirect(route('coinItems.index'));
        }

        $this->coinItemRepository->delete($id);

        Flash::success('Coin Item deleted successfully.');

        return redirect(route('coinItems.index'));
    }
}
