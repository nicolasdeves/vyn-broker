<?php

namespace App\UseCases;

use App\Models\ImagePath;
use App\Models\Property;

class CreatePropertyUseCase {

    public function execute(String $name, String $street, String $neighborhood, String $number, String $complement, Float $price, int $rooms, int $cityId, int $propertyTypeId, int $propertyDealId, int $bathrooms, int $size, int $garage,  ?Array $imagePaths, int $ownerId = null ) {
        $property = Property::create([
            'name'              => $name,
            'street'            => $street,
            'neighborhood'      => $neighborhood,
            'number'            => $number,
            'complement'        => $complement,
            'price'             => $price,
            'rooms'             => $rooms,
            'city_id'           => $cityId,
            'property_type_id'  => $propertyTypeId,
            'property_deal_id'  => $propertyDealId,
            'bathrooms'         => $bathrooms,
            'size'              => $size,
            'garage'            => $garage,
            'owner_id'          => $ownerId
        ]);

        if ($imagePaths) {
            foreach($imagePaths as $imagePath) {
                ImagePath::create([
                    'path' => $imagePath,
                    'property_id' => $property->id
                ]);
            }
        }

        return $property;
    }
}

