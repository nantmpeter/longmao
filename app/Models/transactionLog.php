<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class transactionLog
 * @package App\Models
 * @version December 12, 2017, 7:02 am UTC
 *
 * @property integer coinId
 * @property integer userId
 * @property String desWallet
 */
class transactionLog extends Model
{

    public $table = 'transaction_logs';
    


    public $fillable = [
        'coinId',
        'userId',
        'desWallet'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'coinId' => 'integer',
        'userId' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
