<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\Country\CountryContract;

class CountryController extends Controller
{
    protected $repo;

    public function __construct(CountryContract $countryMod)
    {
    	$this->repo = $countryMod;
    }

    public function dropDown()
    {
    	$countries = $this->repo->findAll();
    	return view('index')->with('countries', $countries);
    }

    public function convertValues(Request $request) 
    {
        $values = $this->repo->convertFactor($request);
        return view('convertedpage')->with('values' , $values);
        // return back()
        //     ->withInput()
        //     ->with('values', $values);
    }   
}
