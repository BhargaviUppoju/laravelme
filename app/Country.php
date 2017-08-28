<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $status
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 */
class Country extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'country';

    /**
     * @var array
     */
    protected $fillable = ['name', 'status', 'deleted', 'created_at', 'updated_at'];

}
