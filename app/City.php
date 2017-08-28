<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $countryid
 * @property string $name
 * @property int $status
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 */
class City extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'city';

    /**
     * @var array
     */
    protected $fillable = ['countryid', 'name', 'status', 'deleted', 'created_at', 'updated_at'];

}
