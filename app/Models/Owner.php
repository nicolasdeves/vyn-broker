<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owner';

    protected $fillable = [
        'name',
        'phone',
    ];

    public function property()
    {
        return $this->hasMany(Property::class);
    }

}
