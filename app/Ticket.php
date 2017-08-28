<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $eventid
 * @property string $name
 * @property string $description
 * @property string $startdatetime
 * @property string $enddatetime
 * @property float $price
 * @property int $quantity
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 */
class Ticket extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ticket';

    /**
     * @var array
     */
    protected $fillable = ['eventid', 'name', 'description', 'startdatetime', 'enddatetime', 'price', 'quantity', 'deleted', 'created_at', 'updated_at'];

}
