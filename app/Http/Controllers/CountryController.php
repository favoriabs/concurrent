<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\Country\CountryContract;
use JavaScript;
use App\Country;
use Session;

class CountryController extends Controller
{
    protected $repo;

    public function __construct(CountryContract $countryMod)
    {
    	$this->repo = $countryMod;
    }

    public function dropDown(Request $request)
    {
        $countries = $this->repo->findAll();
    	return view('landingPage')->with('countries', $countries);
    }


    public function convertValues(Request $request) 
    {
        // $this->validate($request, [
        //         'conv_from' => 'required',
        //     ]);
        $countries = $this->repo->findAll();
        $values = $this->repo->convertFactor($request);
        // $countryCurrencyFrom = $this->repo->currencyNameFrom($request);
        // $countryCurrencyTo = $this->repo->currencyNameTo($request);
        Session::flash('message', 'Record Successfully added!');
        return view('convertedpage')->with('values' , $values)->with('countries', $countries);
    }   
}
