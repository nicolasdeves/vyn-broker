<?php

namespace App\UseCases;

use App\Models\ImagePath;
use App\Models\Property;

class CreatePropertyUseCase {

    public function execute(String $name, String $street, String $neighborhood, int $number, String $complement, int $cityId, int $propertyTypeId, int $propertyDealId, ?int $ownerId, ?Array $imagePaths ) {
        $property = Property::create([
            'name' => $name,
            'street' => $street,
            'neighborhood' => $neighborhood,
            'number' => $number,
            'complement' => $complement,
            'city_id' => $cityId,
            'property_type_id' => $propertyTypeId,
            'property_deal_id' => $propertyDealId,
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

