<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $venue
 * @property string $startdatetime
 * @property string $enddatetime
 * @property int $countryid
 * @property int $stateid
 * @property int $cityid
 * @property int $categoryid
 * @property int $subcategoryid
 * @property boolean $deleted
 * @property string $banner
 * @property string $url
 * @property string $created_at
 * @property string $updated_at
 */
class Event extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event';

    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'venue', 'startdatetime', 'enddatetime', 'countryid', 'stateid', 'cityid', 'categoryid', 'subcategoryid', 'deleted', 'banner', 'url', 'created_at', 'updated_at'];

}
