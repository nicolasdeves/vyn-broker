<?php

namespace App\UseCases;

use App\Models\City;
use App\Models\Property;
use App\Models\PropertyDeal;
use App\Models\PropertyType;

class SearchPropertiesUseCase {

    public function execute($rentOrbuy, $propertyTypeId, $cityId, $neighborhoodId, $propertyCode, $furniture, $bedrooms) {

        $properties = Property::all();

        if($propertyCode) {
            $properties = $properties->where('code', $propertyCode);

            return $properties;
        }

        if($rentOrbuy) {
            $rentOrBuyId = PropertyDeal::where('deal', $rentOrbuy)->first()->id;
            $properties = $properties->where('property_deal_id', $rentOrBuyId);
        }

        if ($propertyTypeId) {
            $properties = $properties->where('property_type_id', $propertyTypeId);
        }

        if ($cityId) {
            $properties = $properties->where('city_id', $cityId);
        }

        if ($neighborhoodId) {
            $properties = $properties->where('neighborhood_id', $neighborhoodId);
        }

        if ($bedrooms) {
            if ($bedrooms <= 2) {
                $properties = $properties->where('rooms', '=', $bedrooms);
            } else {
                $properties = $properties->where('rooms', '>=', $bedrooms);
            }
        }

        if ($furniture) {
            $f = $furniture == 'y' ? 1 : 0;
            $properties = $properties->where('furniture', $f);
        }

        return $properties;
    }
}

