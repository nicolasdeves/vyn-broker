<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Neighborhood;
use App\Models\PropertyType;
use App\UseCases\SearchPropertiesUseCase;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rentOrBuy = $request->rent_or_buy;
        $propertyType = $request->property_type;
        $city = $request->city;
        $neighborhoodId = $request->neighborhood;
        $propertyCode = $request->property_code;
        $bedrooms = $request->bedrooms;
        $furniture = $request->furniture;

        $searchPropertiesUseCase = new SearchPropertiesUseCase();

        $properties = $searchPropertiesUseCase->execute($rentOrBuy, $propertyType, $city, $neighborhoodId, $propertyCode, $furniture, $bedrooms);

        $brokerArea = false;
        $cities = City::all();
        $propertyTypes = PropertyType::all();
        $neighborhoods = Neighborhood::all();

        return view('broker.index', compact('properties', 'brokerArea', 'cities', 'propertyTypes', 'neighborhoods'));
    }

}
