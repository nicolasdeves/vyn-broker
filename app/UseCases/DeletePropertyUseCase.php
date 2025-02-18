<?php

namespace App\UseCases;

use App\Models\Property;

class DeletePropertyUseCase {

    public function execute($id) {
        $property = Property::find($id);

        $property->delete();

        return $property;
    }
}

