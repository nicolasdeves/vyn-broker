<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    protected $fillable = [
        'name',
        'city',
        'street',
        'neighborhood',
        'number',
        'complement',
        'price',
        'rooms',
        'property_type_id',
        'property_deal_id',
        'owner_id',
    ];

    public function propertyType()
    {
        return $this->hasOne(PropertyType::class);
    }

    public function propertyDeal()
    {
        return $this->hasOne(PropertyDeal::class);
    }

    public function owner()
    {
        return $this->hasMany(Owner::class);
    }
}
