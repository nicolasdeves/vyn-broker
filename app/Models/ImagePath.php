<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagePath extends Model
{
    protected $table = 'image_path';

    protected $fillable = [
        'path',
        'property_id',
    ];

    public function property()
    {
        return $this->hasOne(Property::class);
    }

}
