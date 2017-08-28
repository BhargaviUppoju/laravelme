<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $value
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 */
class Category extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'category';

    /**
     * @var array
     */
    protected $fillable = ['name', 'value', 'deleted', 'created_at', 'updated_at'];

}
