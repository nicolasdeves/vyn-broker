<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    protected $fillable = [
        'name',
        'street',
        'neighborhood',
        'number',
        'complement',
        'price',
        'rooms',
        'city_id',

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
        return $this->hasOne(Owner::class);
    }

    public function imagePaths()
    {
        return $this->hasMany(ImagePath::class);
    }
}
