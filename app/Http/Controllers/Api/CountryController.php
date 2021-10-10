<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    use GeneralTrait;

    public function index(){
        $country = Country::select('id', 'country_name_'.app()->getLocale())->get();
        return $this -> returnData('Country', $country);
        //return response() -> json($country);
    }
}
