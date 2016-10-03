<?php
	namespace App\Repositories\Country;

	interface CountryContract
	{
		public function createCountry($request);
		public function editCountry($countryid, $request);
		public function findAll();
		public function findById($countryid);
		public function removeCountry($countryid);
		public function currencyNameFrom($request);
		public function currencyNameTo($request);
	}