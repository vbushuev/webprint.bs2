<?php namespace Vsb\Store\Models;

use Model;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vsb_store_orders';
    public $belongsTo = [
        'user' =>[
            'RainLab\User\Models\User'
        ]
    ];
}
