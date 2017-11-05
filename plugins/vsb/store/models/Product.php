<?php namespace Vsb\Store\Models;

use Model;
use Vsb\Store\Models\Category;

/**
 * Model
 */
class Product extends Model
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
    public $table = 'vsb_store_products';
    public $hasMany = [
        'categories' => [
            'Vsb\Store\Models\ProductCategory'
        ]
    ];
    public $hasManyThrough = [
        'categoriers' => [
            'Vsb\Store\Models\Category',
            // 'key'=>'category_id',
            'through'=>'Vsb\Store\Models\ProductCategory',
            // 'throughKey'=>'id'
        ]
    ];

}
