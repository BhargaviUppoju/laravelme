<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $categoryid
 * @property string $name
 * @property string $value
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 */
class SubCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'subcategory';

    /**
     * @var array
     */
    protected $fillable = ['categoryid', 'name', 'value', 'deleted', 'created_at', 'updated_at'];

}
