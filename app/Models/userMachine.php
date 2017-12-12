<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class userMachine
 * @package App\Models
 * @version December 12, 2017, 7:04 am UTC
 *
 * @property integer userId
 * @property integer machineId
 * @property string amount
 */
class userMachine extends Model
{

    public $table = 'user_machines';
    


    public $fillable = [
        'userId',
        'machineId',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userId' => 'integer',
        'machineId' => 'integer',
        'amount' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
