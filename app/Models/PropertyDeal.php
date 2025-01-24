<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDeal extends Model
{
    protected $table = 'property_deal';

    protected $fillable = [
        'deal',
    ];
}
