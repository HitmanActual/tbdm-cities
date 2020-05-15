<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\City;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;



class CityController  extends Controller
{
    use ApiResponser;
 

    /**
     * Return List of cities
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cities = City::all();
        
        return $this->successResponse($cities);
      
    }

    
    /**
     * get one City
     *
     * @return Illuminate\Http\Response
     */
    public function show($city)
    {
        //

        $city = City::findOrFail($city);
        return $this->successResponse($city);
        
    }

   
}
