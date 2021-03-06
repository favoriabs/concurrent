<?php

	namespace App\Repositories\Country;

	use App\Repositories\Country\CountryContract;
	use App\Country;

	class EloquentCountryRepository implements CountryContract
	{
		public function createCountry($request)
		{
			$country = new Country();
			$country->country_name = $request->country_name;
			$country->country_currency = $request->country_currency;
			$country->currency_code = $request->currency_code;
			$country->currency_rate_todollar = $request->currency_rate_todollar;
			$country->save();
		}

		public function editCountry($countryid, $request)
		{
			$country = $this->findById($countryid);
			$country->country_name = $request->country_name;
			$country->country_currency = $request->country_currency;
			$country->currency_code = $request->currency_code;
			$country->currency_rate_todollar = $request->currency_rate_todollar;
			$country->save();

		}

		public function findById($countryid)
		{
			return Country::find($countryid);
		}

		public function findAll()
		{
			$country = Country::all();
			return $country;
		}

		public function removeCountry($countryid)
		{
			$country = $this->findById($countryid);
			return $country->delete();
		}

		public function convertFactor($request)
		{
			$convert_from = $request->from;
			$convert_to = $request->to;
			$from_value = $request->conv_from;
			$from_country = Country::where('country_name', $convert_from)->first();
			$to_country= Country::where('country_name', $convert_to)->first();
			$dollar_value = (float)$from_value * $from_country->currency_rate_todollar;
			$requested_value = $dollar_value / $to_country->currency_rate_todollar;
			return $requested_value;
		}

		public function currencyNameFrom($request)
		{
			$convert_from = $request->curr_from;
			var_dump($convert_from);
			$from_country = Country::where('currency_code', $convert_from)->first();
			var_dump($from_country);
			return $from_country;
		}

		public function currencyNameTo($request)
		{
			$convert_to = $request->curr_to;
			$to_country = Country::where('currency_code', $convert_to)->first();
			return $to_country;
		}
	}