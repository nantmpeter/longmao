<?php

namespace App\Repositories;

use App\Models\coinItem;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class coinItemRepository
 * @package App\Repositories
 * @version December 12, 2017, 6:45 am UTC
 *
 * @method coinItem findWithoutFail($id, $columns = ['*'])
 * @method coinItem find($id, $columns = ['*'])
 * @method coinItem first($columns = ['*'])
*/
class coinItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'enable'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return coinItem::class;
    }
}
