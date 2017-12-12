<?php

namespace App\Repositories;

use App\Models\userMachine;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class userMachineRepository
 * @package App\Repositories
 * @version December 12, 2017, 7:04 am UTC
 *
 * @method userMachine findWithoutFail($id, $columns = ['*'])
 * @method userMachine find($id, $columns = ['*'])
 * @method userMachine first($columns = ['*'])
*/
class userMachineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'machineId',
        'amount'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return userMachine::class;
    }
}
