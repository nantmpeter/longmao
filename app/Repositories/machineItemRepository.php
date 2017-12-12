<?php

namespace App\Repositories;

use App\Models\machineItem;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class machineItemRepository
 * @package App\Repositories
 * @version December 12, 2017, 6:56 am UTC
 *
 * @method machineItem findWithoutFail($id, $columns = ['*'])
 * @method machineItem find($id, $columns = ['*'])
 * @method machineItem first($columns = ['*'])
*/
class machineItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'capacity',
        'type',
        'describe'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return machineItem::class;
    }
}
