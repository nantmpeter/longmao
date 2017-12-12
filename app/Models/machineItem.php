<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class machineItem
 * @package App\Models
 * @version December 12, 2017, 6:56 am UTC
 *
 * @property string name
 * @property string capacity
 * @property string type
 * @property string describe
 */
class machineItem extends Model
{

    public $table = 'machine_items';
    


    public $fillable = [
        'name',
        'capacity',
        'type',
        'describe'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'capacity' => 'string',
        'type' => 'string',
        'describe' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string'
    ];

    
}
