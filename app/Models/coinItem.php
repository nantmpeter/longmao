<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class coinItem
 * @package App\Models
 * @version December 12, 2017, 6:45 am UTC
 *
 * @property string name
 * @property integer enable
 */
class coinItem extends Model
{

    public $table = 'coin_items';
    


    public $fillable = [
        'name',
        'enable'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'enable' => 'integer'
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
