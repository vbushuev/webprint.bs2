<?php namespace Vsb\Store\Models;

use Model;

/**
 * Model
 */
class Category extends Model
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
    public $table = 'vsb_store_categories';
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    public $belongsTo = [
        'parent' => [
            'Vsb\Store\Models\Category',
            'parent_id'
        ]
    ];
    public function getImageThumbAttribute(){
        $prd = $this->find($this->id);
        return (is_null($prd->image))?'':$prd->image->getThumb(70, 50, ['mode' => 'crop']);
    }
    public function getParentIdOptions(){
        $res = [];
        foreach (Category::all() as $category) {
            $res[$category->id] = $category->title;
        }
        return $res;
    }
}
