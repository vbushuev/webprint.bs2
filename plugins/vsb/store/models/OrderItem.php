<?php namespace Vsb\Store\Models;

use Model;

/**
 * Model
 */
class OrderItem extends Model
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
    public $table = 'vsb_store_order_items';
    public $belongsTo=[
        'order'=>[
            'Vsb\Store\Models\Order'
        ]
    ];
}
