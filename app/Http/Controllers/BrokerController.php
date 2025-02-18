<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use App\Models\City;
use App\Models\Neighborhood;
use App\Models\Property;
use App\Models\PropertyDeal;
use App\UseCases\CreatePropertyUseCase;
use App\UseCases\DeletePropertyUseCase;
use Illuminate\Http\Request;

class BrokerController extends Controller
{
    public function homeScreen() {
        $properties = Property::all();
        $propertyTypes = PropertyType::orderBy('type')->get();
        $propertyDeals = PropertyDeal::orderBy('deal')->get();
        $cities = City::orderBy('name')->get();
        $neighborhoods = Neighborhood::orderBy('name')->get();
        $brokerArea = false;

        return view('broker.index', compact('propertyTypes', 'propertyDeals', 'cities', 'neighborhoods', 'properties', 'brokerArea'));
    }

    public function brokerArea()
    {
        $properties = Property::all();
        $propertyTypes = PropertyType::orderBy('type')->get();
        $propertyDeals = PropertyDeal::orderBy('deal')->get();
        $cities = City::orderBy('name')->get();
        $neighborhoods = Neighborhood::orderBy('name')->get();
        $brokerArea = true;

        return view('broker.broker-area', compact('propertyTypes', 'propertyDeals', 'cities', 'neighborhoods', 'properties', 'brokerArea'));
    }

    public function addProperty(Request $request)
    {
        $imagePaths = [];

        if ($request->hasFile('property_images')) {
            foreach ($request->file('property_images') as $file) {
                $path = $file->store('public/properties'); // Salva na pasta 'storage/app/public/properties'
                $imagePaths[] = str_replace('public/', 'storage/', $path); // Ajusta o caminho para acessar publicamente
            }

        }

        $name = $request->name;
        $street = $request->street;
        $neighborhood = $request->neighborhood_id;
        $number = $request->number;
        $complement = $request->complement;
        $price = $request->price;
        $rooms = $request->rooms;
        $cityId = $request->city_id;
        $propertyTypeId = $request->property_type_id;
        $propertyTypeId = $request->property_deal_id;
        // $owner_id = $request->has('owner_id') ? $request->owner_id : Auth::id();

        $createProperty = new CreatePropertyUseCase();
        $createProperty->execute($name, $street, $neighborhood, $number, $complement, $price, $rooms, $cityId, $propertyTypeId, $propertyTypeId, $imagePaths);


        $propertyTypes = PropertyType::orderBy('type')->get();
        $propertyDeals = PropertyDeal::orderBy('deal')->get();
        $cities = City::orderBy('name')->get();
        $neighborhoods = Neighborhood::orderBy('name')->get();

        return view('broker.broker-area', compact('propertyTypes', 'propertyDeals', 'cities', 'neighborhoods'));
    }

    public function deleteProperty(Request $request)
    {
        $deleteProperty = new DeletePropertyUseCase();
        $deleteProperty->execute($request->id);

    }
}
