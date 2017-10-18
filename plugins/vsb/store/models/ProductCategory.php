<?php namespace Vsb\Store\Models;

use Model;

/**
 * Model
 */
class ProductCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vsb_store_product_categories';
    public $belongsTo=[
        'product'=>[
            'Vsb\Store\Models\Product'
        ],
        'catagory'=>[
            'Vsb\Store\Models\Category'
        ]
    ];
}
