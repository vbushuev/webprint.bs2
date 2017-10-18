<?php namespace Vsb\Store\Models;

use Model;

/**
 * Model
 */
class Paper extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vsb_store_papers';
    public function getImageThumbAttribute(){
        $model = $this->find($this->id);
        return (is_null($model->image))?'':$model->image->getThumb(70, 50, ['mode' => 'crop']);
    }
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
