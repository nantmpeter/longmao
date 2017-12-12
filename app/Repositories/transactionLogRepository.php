<?php

namespace App\Repositories;

use App\Models\transactionLog;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class transactionLogRepository
 * @package App\Repositories
 * @version December 12, 2017, 7:02 am UTC
 *
 * @method transactionLog findWithoutFail($id, $columns = ['*'])
 * @method transactionLog find($id, $columns = ['*'])
 * @method transactionLog first($columns = ['*'])
*/
class transactionLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'coinId',
        'userId',
        'desWallet'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return transactionLog::class;
    }
}
