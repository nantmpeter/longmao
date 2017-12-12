<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class userWealth
 * @package App\Models
 * @version December 12, 2017, 7:05 am UTC
 *
 * @property integer userId
 * @property integer coinId
 * @property string amount
 */
class userWealth extends Model
{

    public $table = 'user_wealths';
    


    public $fillable = [
        'userId',
        'coinId',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'userId' => 'integer',
        'coinId' => 'integer',
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
