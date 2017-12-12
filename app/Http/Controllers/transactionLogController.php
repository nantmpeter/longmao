<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetransactionLogRequest;
use App\Http\Requests\UpdatetransactionLogRequest;
use App\Repositories\transactionLogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class transactionLogController extends Controller
{
    /** @var  transactionLogRepository */
    private $transactionLogRepository;

    public function __construct(transactionLogRepository $transactionLogRepo)
    {
        $this->transactionLogRepository = $transactionLogRepo;
    }

    /**
     * Display a listing of the transactionLog.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->transactionLogRepository->pushCriteria(new RequestCriteria($request));
        $transactionLogs = $this->transactionLogRepository->all();

        return view('transaction_logs.index')
            ->with('transactionLogs', $transactionLogs);
    }

    /**
     * Show the form for creating a new transactionLog.
     *
     * @return Response
     */
    public function create()
    {
        return view('transaction_logs.create');
    }

    /**
     * Store a newly created transactionLog in storage.
     *
     * @param CreatetransactionLogRequest $request
     *
     * @return Response
     */
    public function store(CreatetransactionLogRequest $request)
    {
        $input = $request->all();

        $transactionLog = $this->transactionLogRepository->create($input);

        Flash::success('Transaction Log saved successfully.');

        return redirect(route('transactionLogs.index'));
    }

    /**
     * Display the specified transactionLog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transactionLog = $this->transactionLogRepository->findWithoutFail($id);

        if (empty($transactionLog)) {
            Flash::error('Transaction Log not found');

            return redirect(route('transactionLogs.index'));
        }

        return view('transaction_logs.show')->with('transactionLog', $transactionLog);
    }

    /**
     * Show the form for editing the specified transactionLog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transactionLog = $this->transactionLogRepository->findWithoutFail($id);

        if (empty($transactionLog)) {
            Flash::error('Transaction Log not found');

            return redirect(route('transactionLogs.index'));
        }

        return view('transaction_logs.edit')->with('transactionLog', $transactionLog);
    }

    /**
     * Update the specified transactionLog in storage.
     *
     * @param  int              $id
     * @param UpdatetransactionLogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetransactionLogRequest $request)
    {
        $transactionLog = $this->transactionLogRepository->findWithoutFail($id);

        if (empty($transactionLog)) {
            Flash::error('Transaction Log not found');

            return redirect(route('transactionLogs.index'));
        }

        $transactionLog = $this->transactionLogRepository->update($request->all(), $id);

        Flash::success('Transaction Log updated successfully.');

        return redirect(route('transactionLogs.index'));
    }

    /**
     * Remove the specified transactionLog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transactionLog = $this->transactionLogRepository->findWithoutFail($id);

        if (empty($transactionLog)) {
            Flash::error('Transaction Log not found');

            return redirect(route('transactionLogs.index'));
        }

        $this->transactionLogRepository->delete($id);

        Flash::success('Transaction Log deleted successfully.');

        return redirect(route('transactionLogs.index'));
    }
}
