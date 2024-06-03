<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'country_id';
    protected $keyType = 'string';

    protected $fillable = [
        'country_id',
        'country_name',
        'region_id'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
