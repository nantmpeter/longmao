<?php

namespace App\Repositories;

use App\Models\userWealth;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class userWealthRepository
 * @package App\Repositories
 * @version December 12, 2017, 7:05 am UTC
 *
 * @method userWealth findWithoutFail($id, $columns = ['*'])
 * @method userWealth find($id, $columns = ['*'])
 * @method userWealth first($columns = ['*'])
*/
class userWealthRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'coinId',
        'amount'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return userWealth::class;
    }
}
