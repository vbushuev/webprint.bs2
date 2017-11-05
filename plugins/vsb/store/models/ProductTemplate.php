<?php namespace Vsb\Store\Models;

use Model;

/**
 * Model
 */
class ProductTemplate extends Model
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
    public $table = 'vsb_store_product_templates';
    public $belongsTo = [
        'product' => [
            'Vsb\Store\Models\Product'
        ]
    ];
    public function getProductIdOptions(){
        $res = [];
        foreach(Product::all() as $product) $res[$product->id]=$product->title;
        return $res;
    }
}
