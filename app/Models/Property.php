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
        'bathrooms',
        'size',
        'garage',

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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function getMessageAttribute()
    {
        return $this->property_deal_id == 1 ? "Aluguel" : "Venda";
    }

}
